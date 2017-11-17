<?php


namespace Symfony\Component\Console\Helper;

use Symfony\Component\Console\Exception\LogicException;
use Symfony\Component\Console\Output\ConsoleOutputInterface;
use Symfony\Component\Console\Output\OutputInterface;


class ProgressBar
{

    private static $formatters;
    private static $formats;
    private $barWidth = 28;
    private $barChar;
    private $emptyBarChar = '-';
    private $progressChar = '>';
    private $format;
    private $internalFormat;
    private $redrawFreq = 1;
    private $output;
    private $step = 0;
    private $max;
    private $startTime;
    private $stepWidth;
    private $percent = 0.0;
    private $formatLineCount;
    private $messages = array();
    private $overwrite = true;
    private $firstRun = true;

    public function __construct(OutputInterface $output, $max = 0)
    {
        if ($output instanceof ConsoleOutputInterface) {
            $output = $output->getErrorOutput();
        }

        $this->output = $output;
        $this->setMaxSteps($max);

        if (!$this->output->isDecorated()) {

            $this->overwrite = false;


            $this->setRedrawFrequency($max / 10);
        }

        $this->startTime = time();
    }

    private function setMaxSteps($max)
    {
        $this->max = max(0, (int)$max);
        $this->stepWidth = $this->max ? Helper::strlen($this->max) : 4;
    }

    public function setRedrawFrequency($freq)
    {
        $this->redrawFreq = max((int)$freq, 1);
    }

    public static function setPlaceholderFormatterDefinition($name, $callable)
    {
        if (!self::$formatters) {
            self::$formatters = self::initPlaceholderFormatters();
        }

        self::$formatters[$name] = $callable;
    }

    private static function initPlaceholderFormatters()
    {
        return array(
            'bar' => function (ProgressBar $bar, OutputInterface $output) {
                $completeBars = floor($bar->getMaxSteps() > 0 ? $bar->getProgressPercent() * $bar->getBarWidth() : $bar->getProgress() % $bar->getBarWidth());
                $display = str_repeat($bar->getBarCharacter(), $completeBars);
                if ($completeBars < $bar->getBarWidth()) {
                    $emptyBars = $bar->getBarWidth() - $completeBars - Helper::strlenWithoutDecoration($output->getFormatter(), $bar->getProgressCharacter());
                    $display .= $bar->getProgressCharacter() . str_repeat($bar->getEmptyBarCharacter(), $emptyBars);
                }

                return $display;
            },
            'elapsed' => function (ProgressBar $bar) {
                return Helper::formatTime(time() - $bar->getStartTime());
            },
            'remaining' => function (ProgressBar $bar) {
                if (!$bar->getMaxSteps()) {
                    throw new LogicException('Unable to display the remaining time if the maximum number of steps is not set.');
                }

                if (!$bar->getProgress()) {
                    $remaining = 0;
                } else {
                    $remaining = round((time() - $bar->getStartTime()) / $bar->getProgress() * ($bar->getMaxSteps() - $bar->getProgress()));
                }

                return Helper::formatTime($remaining);
            },
            'estimated' => function (ProgressBar $bar) {
                if (!$bar->getMaxSteps()) {
                    throw new LogicException('Unable to display the estimated time if the maximum number of steps is not set.');
                }

                if (!$bar->getProgress()) {
                    $estimated = 0;
                } else {
                    $estimated = round((time() - $bar->getStartTime()) / $bar->getProgress() * $bar->getMaxSteps());
                }

                return Helper::formatTime($estimated);
            },
            'memory' => function (ProgressBar $bar) {
                return Helper::formatMemory(memory_get_usage(true));
            },
            'current' => function (ProgressBar $bar) {
                return str_pad($bar->getProgress(), $bar->getStepWidth(), ' ', STR_PAD_LEFT);
            },
            'max' => function (ProgressBar $bar) {
                return $bar->getMaxSteps();
            },
            'percent' => function (ProgressBar $bar) {
                return floor($bar->getProgressPercent() * 100);
            },
        );
    }

    public function getMaxSteps()
    {
        return $this->max;
    }

    public function getProgressPercent()
    {
        return $this->percent;
    }

    public function getBarWidth()
    {
        return $this->barWidth;
    }

    public function setBarWidth($size)
    {
        $this->barWidth = (int)$size;
    }

    public function getProgress()
    {
        return $this->step;
    }

    public function getBarCharacter()
    {
        if (null === $this->barChar) {
            return $this->max ? '=' : $this->emptyBarChar;
        }

        return $this->barChar;
    }

    public function getProgressCharacter()
    {
        return $this->progressChar;
    }

    public function getEmptyBarCharacter()
    {
        return $this->emptyBarChar;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    public function getStepWidth()
    {
        return $this->stepWidth;
    }

    public static function setFormatDefinition($name, $format)
    {
        if (!self::$formats) {
            self::$formats = self::initFormats();
        }

        self::$formats[$name] = $format;
    }

    private static function initFormats()
    {
        return array(
            'normal' => ' %current%/%max% [%bar%] %percent:3s%%',
            'normal_nomax' => ' %current% [%bar%]',

            'verbose' => ' %current%/%max% [%bar%] %percent:3s%% %elapsed:6s%',
            'verbose_nomax' => ' %current% [%bar%] %elapsed:6s%',

            'very_verbose' => ' %current%/%max% [%bar%] %percent:3s%% %elapsed:6s%/%estimated:-6s%',
            'very_verbose_nomax' => ' %current% [%bar%] %elapsed:6s%',

            'debug' => ' %current%/%max% [%bar%] %percent:3s%% %elapsed:6s%/%estimated:-6s% %memory:6s%',
            'debug_nomax' => ' %current% [%bar%] %elapsed:6s% %memory:6s%',
        );
    }

    public function setMessage($message, $name = 'message')
    {
        $this->messages[$name] = $message;
    }

    public function getMessage($name = 'message')
    {
        return $this->messages[$name];
    }

    public function getStep()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 2.6 and will be removed in 3.0. Use the getProgress() method instead.', E_USER_DEPRECATED);

        return $this->getProgress();
    }

    public function setBarCharacter($char)
    {
        $this->barChar = $char;
    }

    public function setEmptyBarCharacter($char)
    {
        $this->emptyBarChar = $char;
    }

    public function setProgressCharacter($char)
    {
        $this->progressChar = $char;
    }

    public function setFormat($format)
    {
        $this->format = null;
        $this->internalFormat = $format;
    }

    public function start($max = null)
    {
        $this->startTime = time();
        $this->step = 0;
        $this->percent = 0.0;

        if (null !== $max) {
            $this->setMaxSteps($max);
        }

        $this->display();
    }

    public function display()
    {
        if (OutputInterface::VERBOSITY_QUIET === $this->output->getVerbosity()) {
            return;
        }

        if (null === $this->format) {
            $this->setRealFormat($this->internalFormat ?: $this->determineBestFormat());
        }


        $self = $this;
        $output = $this->output;
        $messages = $this->messages;
        $this->overwrite(preg_replace_callback("{%([a-z\-_]+)(?:\:([^%]+))?%}i", function ($matches) use ($self, $output, $messages) {
            if ($formatter = $self::getPlaceholderFormatterDefinition($matches[1])) {
                $text = call_user_func($formatter, $self, $output);
            } elseif (isset($messages[$matches[1]])) {
                $text = $messages[$matches[1]];
            } else {
                return $matches[0];
            }

            if (isset($matches[2])) {
                $text = sprintf('%' . $matches[2], $text);
            }

            return $text;
        }, $this->format));
    }

    private function setRealFormat($format)
    {

        if (!$this->max && null !== self::getFormatDefinition($format . '_nomax')) {
            $this->format = self::getFormatDefinition($format . '_nomax');
        } elseif (null !== self::getFormatDefinition($format)) {
            $this->format = self::getFormatDefinition($format);
        } else {
            $this->format = $format;
        }

        $this->formatLineCount = substr_count($this->format, "\n");
    }

    public static function getFormatDefinition($name)
    {
        if (!self::$formats) {
            self::$formats = self::initFormats();
        }

        return isset(self::$formats[$name]) ? self::$formats[$name] : null;
    }

    private function determineBestFormat()
    {
        switch ($this->output->getVerbosity()) {

            case OutputInterface::VERBOSITY_VERBOSE:
                return $this->max ? 'verbose' : 'verbose_nomax';
            case OutputInterface::VERBOSITY_VERY_VERBOSE:
                return $this->max ? 'very_verbose' : 'very_verbose_nomax';
            case OutputInterface::VERBOSITY_DEBUG:
                return $this->max ? 'debug' : 'debug_nomax';
            default:
                return $this->max ? 'normal' : 'normal_nomax';
        }
    }

    private function overwrite($message)
    {
        if ($this->overwrite) {
            if (!$this->firstRun) {

                $this->output->write("\x0D");


                $this->output->write("\x1B[2K");


                if ($this->formatLineCount > 0) {
                    $this->output->write(str_repeat("\x1B[1A\x1B[2K", $this->formatLineCount));
                }
            }
        } elseif ($this->step > 0) {
            $this->output->writeln('');
        }

        $this->firstRun = false;

        $this->output->write($message);
    }

    public static function getPlaceholderFormatterDefinition($name)
    {
        if (!self::$formatters) {
            self::$formatters = self::initPlaceholderFormatters();
        }

        return isset(self::$formatters[$name]) ? self::$formatters[$name] : null;
    }

    public function advance($step = 1)
    {
        $this->setProgress($this->step + $step);
    }

    public function setProgress($step)
    {
        $step = (int)$step;
        if ($step < $this->step) {
            throw new LogicException('You can\'t regress the progress bar.');
        }

        if ($this->max && $step > $this->max) {
            $this->max = $step;
        }

        $prevPeriod = (int)($this->step / $this->redrawFreq);
        $currPeriod = (int)($step / $this->redrawFreq);
        $this->step = $step;
        $this->percent = $this->max ? (float)$this->step / $this->max : 0;
        if ($prevPeriod !== $currPeriod || $this->max === $step) {
            $this->display();
        }
    }

    public function setCurrent($step)
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 2.6 and will be removed in 3.0. Use the setProgress() method instead.', E_USER_DEPRECATED);

        $this->setProgress($step);
    }

    public function setOverwrite($overwrite)
    {
        $this->overwrite = (bool)$overwrite;
    }

    public function finish()
    {
        if (!$this->max) {
            $this->max = $this->step;
        }

        if ($this->step === $this->max && !$this->overwrite) {

            return;
        }

        $this->setProgress($this->max);
    }

    public function clear()
    {
        if (!$this->overwrite) {
            return;
        }

        if (null === $this->format) {
            $this->setRealFormat($this->internalFormat ?: $this->determineBestFormat());
        }

        $this->overwrite('');
    }
}
