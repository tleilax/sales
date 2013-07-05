<?php
/**
 * Renders a template from the templates-subfolders with an additional layout
 * 
 * Templates have to be stored in a subdir called "templates".
 * Absolutely nothing is validated so you better do that first.
 *
 * Have in mind that variables are passed from template to layout and the
 * variables from the function's signature cannot be used in a template
 * because they would break the function by overwriting vital information.
 *
 * Example usage:
 * <samp>
 *   $section = render('section', $variables = array(
 *     'title'      => 'Section #1',
 *     'content'    => 'Sample content',
 *     'page_title' => 'Example page',
 *   ));
 *   $html = render('section', $variables, 'layout');
 * </samp>
 * with "templates/section.php":
 * <code>
 *   <h1><?= $section ?></h1>
 *   <p><?= $content ?></p>
 * </code>
 * and "templates/layout.php":
 * <code>
 *   <html>
 *     <head><title><?= $title ?></title></head>
 *     <body><?= $CONTENT ?></body>
 *   </html>
 * </code>
 *
 * @param string $_template  the template to render (note: no extension)
 * @param array  $_variables the variables to be substituted
 * @param mixed  $_layout    an additional layout template
 * @param string $_content   name of content variable used in layout
 *
 * @return string the rendered template
 */
function render($_template, $_variables = array(), $_layout = false, $_content = 'CONTENT') {
    ob_start();
    extract($_variables);
    include 'views/'.$_template.'.php';
    $$_content = ob_get_clean();

    if ($_layout) {
        ob_start();
        include 'views/'.$_layout.'.php';
        $$_content = ob_get_clean();
    }

    return $$_content;
}
