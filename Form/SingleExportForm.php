<?php
/*************************************************************************************/
/*      This file is part of the Thelia package.                                     */
/*                                                                                   */
/*      Copyright (c) OpenStudio                                                     */
/*      email : dev@thelia.net                                                       */
/*      web : http://www.thelia.net                                                  */
/*                                                                                   */
/*      For the full copyright and license information, please view the LICENSE.txt  */
/*      file that was distributed with this source code.                             */
/*************************************************************************************/

namespace Predict\Form;
use Predict\Constraints\IdExists;
use Thelia\Core\Translation\Translator;
use Thelia\Form\BaseForm;
use Thelia\Model\Order;

/**
 * Class SingleExportForm
 * @package Predict\Form
 * @author Benjamin Perche <bperche@openstudio.fr>
 */
class SingleExportForm extends BaseForm
{
    protected function buildForm()
    {
        $this->formBuilder
            ->add("guaranty", "checkbox", array(
                "required"      => false,
                "label"         => Translator::getInstance()->trans("Guaranty"),
                "label_attr"    => ["for"=>"guaranty"],
            ))
        ;
    }

    /**
     * @return string the name of you form. This name must be unique
     */
    public function getName()
    {
        return "single_export_form";
    }

} 