<?php

// autoload_real.php @generated by Composer

<<<<<<< HEAD
class ComposerAutoloaderInit383be53249ebb9c98f3004e36e895293
=======
class ComposerAutoloaderInitff81b82569de96913d78eb36ff725c0d
>>>>>>> 72de9bbc5318d97cd0fa3d8098d0adb6e14ac929
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

<<<<<<< HEAD
        spl_autoload_register(array('ComposerAutoloaderInit383be53249ebb9c98f3004e36e895293', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(\dirname(__FILE__)));
        spl_autoload_unregister(array('ComposerAutoloaderInit383be53249ebb9c98f3004e36e895293', 'loadClassLoader'));
=======
        spl_autoload_register(array('ComposerAutoloaderInitff81b82569de96913d78eb36ff725c0d', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInitff81b82569de96913d78eb36ff725c0d', 'loadClassLoader'));
>>>>>>> 72de9bbc5318d97cd0fa3d8098d0adb6e14ac929

        $useStaticLoader = PHP_VERSION_ID >= 50600 && !defined('HHVM_VERSION') && (!function_exists('zend_loader_file_encoded') || !zend_loader_file_encoded());
        if ($useStaticLoader) {
            require __DIR__ . '/autoload_static.php';

<<<<<<< HEAD
            call_user_func(\Composer\Autoload\ComposerStaticInit383be53249ebb9c98f3004e36e895293::getInitializer($loader));
=======
            call_user_func(\Composer\Autoload\ComposerStaticInitff81b82569de96913d78eb36ff725c0d::getInitializer($loader));
>>>>>>> 72de9bbc5318d97cd0fa3d8098d0adb6e14ac929
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
            $includeFiles = Composer\Autoload\ComposerStaticInit383be53249ebb9c98f3004e36e895293::$files;
=======
            $includeFiles = Composer\Autoload\ComposerStaticInitff81b82569de96913d78eb36ff725c0d::$files;
>>>>>>> 72de9bbc5318d97cd0fa3d8098d0adb6e14ac929
        } else {
            $includeFiles = require __DIR__ . '/autoload_files.php';
        }
        foreach ($includeFiles as $fileIdentifier => $file) {
<<<<<<< HEAD
            composerRequire383be53249ebb9c98f3004e36e895293($fileIdentifier, $file);
=======
            composerRequireff81b82569de96913d78eb36ff725c0d($fileIdentifier, $file);
>>>>>>> 72de9bbc5318d97cd0fa3d8098d0adb6e14ac929
        }

        return $loader;
    }
}

<<<<<<< HEAD
function composerRequire383be53249ebb9c98f3004e36e895293($fileIdentifier, $file)
=======
function composerRequireff81b82569de96913d78eb36ff725c0d($fileIdentifier, $file)
>>>>>>> 72de9bbc5318d97cd0fa3d8098d0adb6e14ac929
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        require $file;

        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;
    }
}
