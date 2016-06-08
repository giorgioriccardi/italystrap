<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9602fe9d5f2cd9e13a23070ae5d0fde8
{
    public static $files = array (
        'a5f882d89ab791a139cd2d37e50cdd80' => __DIR__ . '/..' . '/tgmpa/tgm-plugin-activation/class-tgm-plugin-activation.php',
    );

    public static $classMap = array (
        'ItalyStrapAdminCategoryEditor' => __DIR__ . '/../..' . '/admin/class-italystrap-category-editor.php',
        'ItalyStrapBreadcrumbs' => __DIR__ . '/../..' . '/core/ItalyStrapBreadcrumbs.php',
        'ItalyStrapOptionTheme' => __DIR__ . '/../..' . '/admin/ItalyStrapOptionTheme.php',
        'ItalyStrap\\Admin\\Admin_Text_Editor' => __DIR__ . '/../..' . '/admin/class-admin-text-editor.php',
        'ItalyStrap\\Admin\\Custom_Meta_Box' => __DIR__ . '/../..' . '/admin/class-custom-meta-box.php',
        'ItalyStrap\\Admin\\Custom_Walker_Nav_Menu_Edit' => __DIR__ . '/../..' . '/admin/class-custom-walker-nav-menu-edit.php',
        'ItalyStrap\\Admin\\Customize_Check_Control' => __DIR__ . '/../..' . '/admin/class-customize-checkbox-control.php',
        'ItalyStrap\\Admin\\Customizer' => __DIR__ . '/../..' . '/admin/class-customizer.php',
        'ItalyStrap\\Admin\\Handle_Custom_Walker_Nav_Menu_Edit' => __DIR__ . '/../..' . '/admin/class-handle-custom-walker-nav-menu-edit.php',
        'ItalyStrap\\Admin\\Register_Required_Plugins' => __DIR__ . '/../..' . '/admin/class-register-required-plugins.php',
        'ItalyStrap\\Core\\Bootstrap_Nav_Menu' => __DIR__ . '/../..' . '/core/class-bootstrap-nav-menu.php',
        'ItalyStrap\\Core\\Navbar' => __DIR__ . '/../..' . '/core/class-navbar.php',
        'ItalyStrap_Excerpt' => __DIR__ . '/../..' . '/core/class-italystrap-excerpt.php',
        'ItalyStrap_Sidebars' => __DIR__ . '/../..' . '/core/class-italystrap-sidebars.php',
        'ItalyStrap_Walker_Comment' => __DIR__ . '/../..' . '/core/class-italystrap-comments.php',
        'ItalyStrap_template_functions' => __DIR__ . '/../..' . '/core/class-italystrap-template-functions.php',
        'Textarea_Custom_Control' => __DIR__ . '/../..' . '/admin/textarea/textarea-custom-control.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit9602fe9d5f2cd9e13a23070ae5d0fde8::$classMap;

        }, null, ClassLoader::class);
    }
}
