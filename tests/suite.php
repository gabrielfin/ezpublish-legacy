<?php
/**
 * File containing the eZTestSuite class
 *
 * @copyright Copyright (C) 1999-2009 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU GPLv2
 * @package tests
 */

class eZTestSuite extends ezpTestSuite
{
    public function __construct()
    {
        parent::__construct();
        $this->setName( "eZ Publish Test Suite" );

        $this->addTestSuite( 'eZKernelTestSuite' );
        $this->addTestSuite( 'eZUtilsTestSuite' );
        $this->addTestSuite( 'eZDBTestSuite' );
        $this->addTestSuite( 'eZSOAPTestSuite' );
        $this->addTestSuite( 'eZLocaleTestSuite' );
        $this->addTestSuite( 'eZTemplateTestSuite' );
        $this->addTestSuite( 'eZImageTestSuite' );
    }

    public static function suite()
    {
        return new self();
    }
}
?>
