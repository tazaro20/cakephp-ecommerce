<?php
namespace App\View\Helper;

use Cake\View\Helper;
use Cake\View\Helper\HtmlHelper;

class AdminThemeHelper extends Helper
{
    public $helpers = ['Html'];

    /**
     * Generate an admin styled button
     *
     * @param string $title The button title
     * @param string|array $url The URL the button links to
     * @param array $options Additional options for the button
     * @return string HTML code for the button
     */
    public function adminButton($title, $url, $options = [])
    {
        $options = array_merge($options, ['class' => 'btn btn-primary']);
        return $this->Html->link($title, $url, $options);
    }

    /**
     * Generate a styled card component for the admin dashboard
     *
     * @param string $title The title of the card
     * @param string $content The content of the card
     * @return string HTML code for the card
     */
    public function adminCard($title, $content)
    {
        $html = '<div class="card">';
        $html .= '<div class="card-header">' . h($title) . '</div>';
        $html .= '<div class="card-body">' . h($content) . '</div>';
        $html .= '</div>';
        return $html;
    }
}
