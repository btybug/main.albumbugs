<?php
/**
 * Created by PhpStorm.
 * User: hook
 * Date: 12/11/2017
 * Time: 11:58 PM
 */

namespace Btybug\btybug\Models\Painter;


interface PainterInterface
{
    /**
     * @return mixed
     */
    public function scopeAll();

    /**
     * @param string $slug
     * @return mixed
     */
    public function scopeFind(string $slug);

    /**
     * @param array ...$args
     * @return mixed
     */
    public function scopeGetAllByTagName(...$args);

    /**
     * @param array $array
     * @return mixed
     */
    public function scopeSave(array $array);

    /**
     * @param array $array
     * @return mixed
     */
    public function scopeCreateVariation(array $array);

    /**
     * @param array $array
     * @return mixed
     */
    public function scopeMakeVariation(array $array);

    /**
     * @return mixed
     */
    public function scopeSaveVariation();

    /**
     * @param string $arg1
     * @param string $condition
     * @param string $arg3
     * @return mixed
     */
    public function scopeWhere(string $arg1, string $condition, string $arg3);

    /**
     * @return mixed
     */
    public function scopeGet();
}