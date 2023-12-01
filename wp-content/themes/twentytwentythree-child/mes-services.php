<?php
function subscribe_link(){
    return '<ul>
    <li>Service 1</li>
    <li>Service 2</li>
    <li>Service 3</li>
    <li>Service 4</li>
    </ul>';
}
add_shortcode('mes-services', 'subscribe_link');

?>