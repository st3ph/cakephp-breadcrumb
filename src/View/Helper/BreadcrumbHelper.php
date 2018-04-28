<?php
namespace Breadcrumb\View\Helper;

use Cake\View\Helper;

class BreadcrumbHelper extends Helper {

    public function display($breadcrumbs=[],$options = []) {
        $options = array_merge([
            'container' => "ol",            // tag name of container
            'class'     => "breadcrumb",    // class name of container
            'class-item'     => "breadcrumb-item",    // class name of container
            'element'   => "li",            // tag name of element
            'active'    => "active"         // active class name of element
        ], $options);

        $html = '';
        if(!empty($breadcrumbs)) {
            $html .= '<'.$options['container'].' class="'.$options['class'].'">';
                $index = 0;
                foreach($breadcrumbs as $breadcrumb) {
                    $active = $breadcrumb['active']?$options['active']:'';
                    $html .= '<'.$options['element'].' class="'.$active.' '.$options['class-item'].'">';
                        if($index == 0) {
                            $html .= '<span class="fa fa-home"></span>&nbsp;';
                        }
                        if(empty($breadcrumb['url'])){
                            $html .= $breadcrumb['title'];
                        } else {
                            $html .= '<a href="'.$breadcrumb['url'].'">';
                                $html .= $breadcrumb['title'];
                            $html .= '</a>';
                        }
                    $html .= '</'.$options['element'].'>';
                    $index++;
                }
            $html .= '</'.$options['container'].'>';
        }

        return $html;
    }
}