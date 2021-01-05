<?php

run('');

function run( $dir )
{
    foreach( glob( $dir . '*' ) as $file ) {

        if( is_dir( $file ) ) {
            run( $file . '/' );
        }

        if( substr( $file, -11 ) == 'desktop.ini' ) {
            unlink($file);
            echo 'CLEANED: ' . $file . "\r\n";
        }
        
    }
}
