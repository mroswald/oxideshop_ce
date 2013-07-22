<?php
/**
 *    This file is part of OXID eShop Community Edition.
 *
 *    OXID eShop Community Edition is free software: you can redistribute it and/or modify
 *    it under the terms of the GNU General Public License as published by
 *    the Free Software Foundation, either version 3 of the License, or
 *    (at your option) any later version.
 *
 *    OXID eShop Community Edition is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU General Public License for more details.
 *
 *    You should have received a copy of the GNU General Public License
 *    along with OXID eShop Community Edition.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      http://www.oxid-esales.com
 * @package   tests
 * @copyright (C) OXID eSales AG 2003-2013
 * @version OXID eShop CE
 */

require_once realpath( "." ) . '/unit/OxidTestCase.php';
require_once realpath( "." ) . '/unit/test_config.inc.php';

/**
 * Tests for oxwReview class
 */
class Unit_Components_Widgets_oxwreviewTest extends OxidTestCase
{
    /**
     * Testing oxwRating::getReviewType()
     *
     * @return null
     */
    public function testGetReviewTypeLowerCase()
    {
        $oReviewWidget = new oxwReview();
        $oReviewWidget->setViewParameters( array( 'type' => 'testreviewtype' ) );
        $this->assertEquals( 'testreviewtype', $oReviewWidget->getReviewType() );
    }

    /**
     * Testing oxwRating::getReviewType()
     *
     * @return null
     */
    public function testGetReviewTypeUpperCase()
    {
        $oReviewWidget = new oxwReview();
        $oReviewWidget->setViewParameters( array( 'type' => 'TESTREVIEWTYPE' ) );
        $this->assertEquals( 'testreviewtype', $oReviewWidget->getReviewType() );
    }

    /**
     * Testing oxwRating::getArticleId()
     *
     * @return null
     */
    public function testGetArticleId()
    {
        $oReviewWidget = new oxwReview();
        $oReviewWidget->setViewParameters( array( 'aid' => 'testaid' ) );
        $this->assertEquals( 'testaid', $oReviewWidget->getArticleId() );
    }

    /**
     * Testing oxwRating::getArticleId()
     *
     * @return null
     */
    public function testGetArticleNId()
    {
        $oReviewWidget = new oxwReview();
        $oReviewWidget->setViewParameters( array( 'anid' => 'testanid' ) );
        $this->assertEquals( 'testanid', $oReviewWidget->getArticleNId() );
    }

    /**
     * Testing oxwRating::getRecommListId()
     *
     * @return null
     */
    public function testGetRecommListId()
    {
        $oReviewWidget = new oxwReview();
        $oReviewWidget->setViewParameters( array( 'recommid' => 'testrecommid' ) );
        $this->assertEquals( 'testrecommid', $oReviewWidget->getRecommListId() );
    }

    /**
     * Testing oxwRating::canRate()
     *
     * @return null
     */
    public function testCanRate()
    {
        $oReviewWidget = new oxwReview();
        $oReviewWidget->setViewParameters( array( 'canrate' => 'testcanrate' ) );
        $this->assertEquals( 'testcanrate', $oReviewWidget->canRate() );
    }

    /**
     * Testing oxwRating::getReviewUserHash()
     *
     * @return null
     */
    public function testGetReviewUserHash()
    {
        $oReviewWidget = new oxwReview();
        $oReviewWidget->setViewParameters( array( 'reviewuserhash' => 'testreviewuserhash' ) );
        $this->assertEquals( 'testreviewuserhash', $oReviewWidget->getReviewUserHash() );
    }
}