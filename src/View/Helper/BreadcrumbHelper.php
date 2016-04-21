<?php
namespace Breadcrumb\View\Helper;

use Cake\View\Helper;

class BreadcrumbHelper extends Helper
{
    public function display(array $breadcrumbs)
    {
        $html = '';
        if(!empty($breadcrumbs)) {
            $html .= '<ol class="breadcrumb">';
                $index = 0;
                foreach($breadcrumbs as $breadcrumb) {
                    $active = $breadcrumb['active']?'active':'';
                    $html .= '<li class="'.$active.'">';
                        if($index == 0) {
                            $html .= '<span class="fa fa-home"></span>&nbsp;';
                        }
                        $html .= '<a href="'.$breadcrumb['url'].'">';
                            $html .= $breadcrumb['title'];
                        $html .= '</a>';
                    $html .= '</li>';
                    $index++;
                }
            $html .= '</ol>';
        }

        return $html;
    }
}