<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitefc3e65e126386c56ad9be1946674b39
{
    public static $files = array (
        'e712cc6d44b8766a650cad83bfa1bd78' => __DIR__ . '/../..' . '/app/helpers/exception.php',
        '9a9109088838d716fa39c78e98632d8f' => __DIR__ . '/../..' . '/app/helpers/constants.php',
        '6c3b213bd3270c8b5f4784a573bbbf39' => __DIR__ . '/../..' . '/app/helpers/flashMessage.php',
        '04d55bfbe4b34b60fe0cbffd0c4508d3' => __DIR__ . '/../..' . '/app/helpers/redirect.php',
        '774aca820f4d482b4118b94e661b1e2a' => __DIR__ . '/../..' . '/app/helpers/session.php',
        'fbc2e65b1f0a42f708bb41d97c6321d3' => __DIR__ . '/../..' . '/app/helpers/old.php',
    );

    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
        'W' => 
        array (
            'Whoops\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'Whoops\\' => 
        array (
            0 => __DIR__ . '/..' . '/filp/whoops/src/Whoops',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Psr\\Log\\AbstractLogger' => __DIR__ . '/..' . '/psr/log/src/AbstractLogger.php',
        'Psr\\Log\\InvalidArgumentException' => __DIR__ . '/..' . '/psr/log/src/InvalidArgumentException.php',
        'Psr\\Log\\LogLevel' => __DIR__ . '/..' . '/psr/log/src/LogLevel.php',
        'Psr\\Log\\LoggerAwareInterface' => __DIR__ . '/..' . '/psr/log/src/LoggerAwareInterface.php',
        'Psr\\Log\\LoggerAwareTrait' => __DIR__ . '/..' . '/psr/log/src/LoggerAwareTrait.php',
        'Psr\\Log\\LoggerInterface' => __DIR__ . '/..' . '/psr/log/src/LoggerInterface.php',
        'Psr\\Log\\LoggerTrait' => __DIR__ . '/..' . '/psr/log/src/LoggerTrait.php',
        'Psr\\Log\\NullLogger' => __DIR__ . '/..' . '/psr/log/src/NullLogger.php',
        'Whoops\\Exception\\ErrorException' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Exception/ErrorException.php',
        'Whoops\\Exception\\Formatter' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Exception/Formatter.php',
        'Whoops\\Exception\\Frame' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Exception/Frame.php',
        'Whoops\\Exception\\FrameCollection' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Exception/FrameCollection.php',
        'Whoops\\Exception\\Inspector' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Exception/Inspector.php',
        'Whoops\\Handler\\CallbackHandler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/CallbackHandler.php',
        'Whoops\\Handler\\Handler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/Handler.php',
        'Whoops\\Handler\\HandlerInterface' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/HandlerInterface.php',
        'Whoops\\Handler\\JsonResponseHandler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/JsonResponseHandler.php',
        'Whoops\\Handler\\PlainTextHandler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/PlainTextHandler.php',
        'Whoops\\Handler\\PrettyPageHandler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/PrettyPageHandler.php',
        'Whoops\\Handler\\XmlResponseHandler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/XmlResponseHandler.php',
        'Whoops\\Inspector\\InspectorFactory' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Inspector/InspectorFactory.php',
        'Whoops\\Inspector\\InspectorFactoryInterface' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Inspector/InspectorFactoryInterface.php',
        'Whoops\\Inspector\\InspectorInterface' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Inspector/InspectorInterface.php',
        'Whoops\\Run' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Run.php',
        'Whoops\\RunInterface' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/RunInterface.php',
        'Whoops\\Util\\HtmlDumperOutput' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Util/HtmlDumperOutput.php',
        'Whoops\\Util\\Misc' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Util/Misc.php',
        'Whoops\\Util\\SystemFacade' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Util/SystemFacade.php',
        'Whoops\\Util\\TemplateHelper' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Util/TemplateHelper.php',
        'app\\classes\\Block' => __DIR__ . '/../..' . '/app/classes/Block.php',
        'app\\classes\\BlockNoReason' => __DIR__ . '/../..' . '/app/classes/BlockNoReason.php',
        'app\\classes\\BlockNotLogged' => __DIR__ . '/../..' . '/app/classes/BlockNotLogged.php',
        'app\\classes\\BlockPostRequest' => __DIR__ . '/../..' . '/app/classes/BlockPostRequest.php',
        'app\\classes\\Flash' => __DIR__ . '/../..' . '/app/classes/Flash.php',
        'app\\classes\\Old' => __DIR__ . '/../..' . '/app/classes/Old.php',
        'app\\classes\\Validate' => __DIR__ . '/../..' . '/app/classes/Validate.php',
        'app\\classes\\ValidateEmail' => __DIR__ . '/../..' . '/app/classes/ValidateEmail.php',
        'app\\classes\\ValidateMaxLen' => __DIR__ . '/../..' . '/app/classes/ValidateMaxLen.php',
        'app\\classes\\ValidateRequired' => __DIR__ . '/../..' . '/app/classes/ValidateRequired.php',
        'app\\controllers\\Home' => __DIR__ . '/../..' . '/app/controllers/Home.php',
        'app\\controllers\\Login' => __DIR__ . '/../..' . '/app/controllers/Login.php',
        'app\\controllers\\User' => __DIR__ . '/../..' . '/app/controllers/User.php',
        'app\\core\\AppExtract' => __DIR__ . '/../..' . '/app/core/AppExtract.php',
        'app\\core\\ControllerExtract' => __DIR__ . '/../..' . '/app/core/ControllerExtract.php',
        'app\\core\\MethodExtract' => __DIR__ . '/../..' . '/app/core/MethodExtract.php',
        'app\\core\\MyApp' => __DIR__ . '/../..' . '/app/core/MyApp.php',
        'app\\core\\ParamsExtract' => __DIR__ . '/../..' . '/app/core/ParamsExtract.php',
        'app\\core\\Uri' => __DIR__ . '/../..' . '/app/core/Uri.php',
        'app\\interfaces\\ActiveRecordExecuteInterface' => __DIR__ . '/../..' . '/app/interfaces/ActiveRecordExecuteInterface.php',
        'app\\interfaces\\ActiveRecordInterface' => __DIR__ . '/../..' . '/app/interfaces/ActiveRecordInterface.php',
        'app\\interfaces\\AppInterface' => __DIR__ . '/../..' . '/app/interfaces/AppInterface.php',
        'app\\interfaces\\ControllerInterface' => __DIR__ . '/../..' . '/app/interfaces/ControllerInterface.php',
        'app\\interfaces\\ValidateInteface' => __DIR__ . '/../..' . '/app/interfaces/ValidateInteface.php',
        'app\\models\\User' => __DIR__ . '/../..' . '/app/models/User.php',
        'app\\models\\activerecord\\ActiveRecord' => __DIR__ . '/../..' . '/app/models/activerecord/ActiveRecord.php',
        'app\\models\\activerecord\\Delete' => __DIR__ . '/../..' . '/app/models/activerecord/Delete.php',
        'app\\models\\activerecord\\FindAll' => __DIR__ . '/../..' . '/app/models/activerecord/FindAll.php',
        'app\\models\\activerecord\\FindBy' => __DIR__ . '/../..' . '/app/models/activerecord/FindBy.php',
        'app\\models\\activerecord\\Insert' => __DIR__ . '/../..' . '/app/models/activerecord/Insert.php',
        'app\\models\\activerecord\\Update' => __DIR__ . '/../..' . '/app/models/activerecord/Update.php',
        'app\\models\\connection\\Connection' => __DIR__ . '/../..' . '/app/models/connection/Connection.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitefc3e65e126386c56ad9be1946674b39::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitefc3e65e126386c56ad9be1946674b39::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitefc3e65e126386c56ad9be1946674b39::$classMap;

        }, null, ClassLoader::class);
    }
}
