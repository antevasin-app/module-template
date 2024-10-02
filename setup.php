<?php

namespace Antevasin;


$module_path = __DIR__ . DIRECTORY_SEPARATOR;
$module_name = basename( __DIR__ );

print_rr("setting up $module_name module...");

// print_rr($module_path); print_rr($module_name);

$version = '1.0.0';
$render_module_function = '>render()';
$module_title = ucfirst( $module_name );
$files = array( 
    'action' => array( 
        'path' => $module_path . 'actions' . DIRECTORY_SEPARATOR,
        'file' => $module_name . '.php',
        'contents' => '<?php' . PHP_EOL . PHP_EOL . 'namespace Antevasin;'
    ), 
    'js' => array( 
        'path' => $module_path . 'components' . DIRECTORY_SEPARATOR,
        'file' => $module_name . '.js.php',
        'contents' => '<?php' . PHP_EOL . PHP_EOL . 'namespace Antevasin;' . PHP_EOL . PHP_EOL . '?>' . PHP_EOL . 'var ' . $module_name . ' = ' . $module_name . ' || {};'
    ), 
    'class' => array( 
        'path' => $module_path . 'includes' . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR,
        'file' => $module_name . '.php', 
        'contents' => '<?php' . PHP_EOL . PHP_EOL . 'namespace Antevasin;' . PHP_EOL . PHP_EOL . 'class ' . $module_name . ' extends core implements module' . PHP_EOL . '{' . PHP_EOL . '    public function __construct()' . PHP_EOL . '    {' . PHP_EOL . '        parent::__construct( \'' . $module_name . '\' );' . PHP_EOL . '    }' . PHP_EOL . '}'
    ), 
    'index' => array( 
        'path' => $module_path . 'views' . DIRECTORY_SEPARATOR,
        'file' => 'index.php',
        'contents' => '<?php' . PHP_EOL . PHP_EOL . 'namespace Antevasin;' . PHP_EOL . PHP_EOL . "\$index = new index( $$module_name );" . PHP_EOL . "\$index-$render_module_function;"
    ), 
    'module_json' => array( 
        'overwrite' => true,
        'path' => $module_path,
        'file' => 'module.json',
        'contents' => '{' . PHP_EOL . "\t" . '"title": "' . $module_title . '",' . PHP_EOL . "\t" . '"version": "' . $version . '",' . PHP_EOL . "\t" . '"description": "' . $module_title . ' module for the Antevasin plugin"' . PHP_EOL . '}'
    ), 
    'module_top' => array( 
        'path' => $module_path,
        'file' => 'module_top.php', 
        'contents' => '<?php' . PHP_EOL . PHP_EOL . 'namespace Antevasin;' . PHP_EOL . PHP_EOL . "$$module_name = new $module_name();"
    ), 
);
// $files = array( 'action', 'js', 'class', 'index', 'module_json', 'module_top' );
foreach ( $files as $file => $file_info )
{
    $$file = false;
    if ( isset( $file_info['contents'] ) )
    {
        $path = $file_info['path'];
        $file_path = $path . $file_info['file'];
        $file_contents = $file_info['contents'];
        if ( !file_exists( $path ) )
        {
            print_rr("creating path $path");
            mkdir( $path, 0711, true );
        }
        // print_rr($file_path);
        if ( !file_exists( $file_path ) || ( isset( $file_info['overwrite'] ) && $file_info['overwrite'] ) ) $$file = file_put_contents( $file_path, $file_contents );
    }
}
// die(print_rr('pause'));
if ( $action && $js && $class && $index && $module_json && $module_top )
{
    foreach ( $files as $file_to_check )
	{
        print_rr("{$file_to_check['path']} was created successfully");		
    }
    print_rr("Setup sucessfully completed. Delete setup.php file to continue.");
} 
else
{
    $file_check = true;
	foreach ( $files as $file_to_check )
	{
	    if ( file_exists( $file_to_check['path'] ) )
        {
            print_rr("{$file_to_check['path']} exists and was created successfully");		
        }
        else
	    {
		    print_rr("{$file_to_check['path']} was not created successfully");		
		    $file_check = false;	
	    }
    }
    if ( $file_check )
    { 
        print_rr("All files were created successfully. Delete setup.php file to continue");
    }
    else
    {
        print_rr('an error occurred as above. start process agasin');
    }
}

exit();