<?php

namespace Btybug\Uploads\Services;

use Btybug\btybug\Services\GeneralService;
use Btybug\Framework\Repository\VersionsRepository;
use Btybug\btybug\Repositories\AdminsettingRepository;
use Btybug\Uploads\Repository\VersionProfilesRepository;

/**
 * Class ThemeService
 * @package Btybug\Console\Services
 */
class VersionProfilesService extends GeneralService
{

    /**
     * @var
     */
    private $current;
    private $versionsRepository;
    private $adminsettingRepository;
    private $versionServiceRepository;
    /**
     * @var
     */
    private $result;

    public function __construct (VersionsRepository $versionsRepository, AdminsettingRepository $adminsettingRepository, VersionProfilesRepository $profilesRepository)
    {
        $this->versionsRepository = $versionsRepository;
        $this->adminsettingRepository = $adminsettingRepository;
        $this->versionServiceRepository = $profilesRepository;
    }

    public function generateJS ($profile)
    {
        $this->synchronize($profile, 'js');
    }

    public function generateCSS ($profile)
    {
        $this->synchronize($profile);
    }

    private function synchronize ($profile, $type = 'css')
    {
        $generatingData = $profile->files;
        $file_data = "";
        if (count($generatingData)) {
            foreach ($generatingData as $key => $id) {
                $val = $this->versionsRepository->find($id);
                if ($val) {
                    if (\File::exists(public_path($type . "/versions/" . $val->name . "/" . $val->version . "/" . $val->file_name))) {
                        $file_data .= \File::get(public_path($type . "/versions/" . $val->name . "/" . $val->version . "/" . $val->file_name));
                    } else {
                        if (\File::exists(public_path($type . "/versions/" . $val->file_name))) {
                            $file_data .= \File::get(public_path($type . "/versions/" . $val->file_name));
                        }
                    }
                }
            }
        }
        $file = $type . "/profiles/" . str_slug($profile->name) . "." . $type;
        $this->versionServiceRepository->update($profile->id, ['hint_path' => $file]);
        $this->MakeFile($file, $file_data, $type);
    }

    public function MakeFile ($file, $data, $type)
    {
        if (! \File::isDirectory(public_path($type . "/profiles"))) {
            \File::makeDirectory(public_path($type . "/profiles"));
        }

        \File::put(public_path($file), $data);
    }

    public function removeFile ($path)
    {
        \File::delete(public_path($path));
    }
}