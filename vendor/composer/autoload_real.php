<?php

// autoload_real.php @generated by Composer

<<<<<<< HEAD
class ComposerAutoloaderInita6aa8a861032a3e320641ff97239ce45
=======
class ComposerAutoloaderInit96690e8452c8bf2f329af22c4742bca8
>>>>>>> 5382f34cf07f03a04c95018f97f45d5d4f80a8ac
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

<<<<<<< HEAD
        spl_autoload_register(array('ComposerAutoloaderInita6aa8a861032a3e320641ff97239ce45', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInita6aa8a861032a3e320641ff97239ce45', 'loadClassLoader'));
=======
        spl_autoload_register(array('ComposerAutoloaderInit96690e8452c8bf2f329af22c4742bca8', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInit96690e8452c8bf2f329af22c4742bca8', 'loadClassLoader'));
>>>>>>> 5382f34cf07f03a04c95018f97f45d5d4f80a8ac

        $useStaticLoader = PHP_VERSION_ID >= 50600 && !defined('HHVM_VERSION') && (!function_exists('zend_loader_file_encoded') || !zend_loader_file_encoded());
        if ($useStaticLoader) {
            require __DIR__ . '/autoload_static.php';

<<<<<<< HEAD
            call_user_func(\Composer\Autoload\ComposerStaticInita6aa8a861032a3e320641ff97239ce45::getInitializer($loader));
=======
            call_user_func(\Composer\Autoload\ComposerStaticInit96690e8452c8bf2f329af22c4742bca8::getInitializer($loader));
>>>>>>> 5382f34cf07f03a04c95018f97f45d5d4f80a8ac
        } else {
            $map = require __DIR__ . '/autoload_namespaces.php';
            foreach ($map as $namespace => $path) {
                $loader->set($namespace, $path);
            }

            $map = require __DIR__ . '/autoload_psr4.php';
            foreach ($map as $namespace => $path) {
                $loader->setPsr4($namespace, $path);
            }

            $classMap = require __DIR__ . '/autoload_classmap.php';
            if ($classMap) {
                $loader->addClassMap($classMap);
            }
        }

        $loader->register(true);

        if ($useStaticLoader) {
<<<<<<< HEAD
            $includeFiles = Composer\Autoload\ComposerStaticInita6aa8a861032a3e320641ff97239ce45::$files;
=======
            $includeFiles = Composer\Autoload\ComposerStaticInit96690e8452c8bf2f329af22c4742bca8::$files;
>>>>>>> 5382f34cf07f03a04c95018f97f45d5d4f80a8ac
        } else {
            $includeFiles = require __DIR__ . '/autoload_files.php';
        }
        foreach ($includeFiles as $fileIdentifier => $file) {
<<<<<<< HEAD
            composerRequirea6aa8a861032a3e320641ff97239ce45($fileIdentifier, $file);
=======
            composerRequire96690e8452c8bf2f329af22c4742bca8($fileIdentifier, $file);
>>>>>>> 5382f34cf07f03a04c95018f97f45d5d4f80a8ac
        }

        return $loader;
    }
}

<<<<<<< HEAD
function composerRequirea6aa8a861032a3e320641ff97239ce45($fileIdentifier, $file)
=======
function composerRequire96690e8452c8bf2f329af22c4742bca8($fileIdentifier, $file)
>>>>>>> 5382f34cf07f03a04c95018f97f45d5d4f80a8ac
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        require $file;

        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;
    }
}
