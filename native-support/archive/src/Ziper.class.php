<?php
/**
 * User: realeve
 * 20180202
 */

class Ziper
{

    public static function compress($filepath, $rootpath = null)
    {

        $zip = new ZipArchive();
        //参数1:zip保存路径，参数2：ZIPARCHIVE::CREATE没有即是创建
        if (!$zip->open("$filepath.zip", ZIPARCHIVE::CREATE)) {
            echo "创建[$filepath.zip]失败<br/>";return;
        }

        Ziper::_compress(opendir($filepath), $zip, $filepath);
        $zip->close();

        return $filepath . '.zip';
    }

    private static function _compress($openFile, $zipObj, $sourceAbso, $newRelat = '')
    {
        while (($file = readdir($openFile)) != false) {
            if ($file == "." || $file == "..") {
                continue;
            }

            /*源目录路径(绝对路径)*/
            $sourceTemp = $sourceAbso . '/' . $file;
            /*目标目录路径(相对路径)*/
            $newTemp = $newRelat == '' ? $file : $newRelat . '/' . $file;
            if (is_dir($sourceTemp)) {
                $zipObj->addEmptyDir($newTemp);
                Ziper::_compress(opendir($sourceTemp), $zipObj, $sourceTemp, $newTemp);
            }
            if (is_file($sourceTemp)) {
                $zipObj->addFile($sourceTemp, $newTemp);
            }
        }
    }

}
