<?php
add_action('admin_menu', 'ajouter_menu_nouveau');

function ajouter_menu_nouveau() {
    add_menu_page(
        'Nouveau Menu',
        'Nouveau Menu',
        'manage_options',
        'nouveau-menu',
        'page_nouveau_menu'
    );
}
function page_nouveau_menu() {
    ?>
    <div class="wrap">
        <h2>Nouveau Menu</h2>
        <form method="post" action="">
            <!-- Ajoutez le formulaire avec la case à cocher ici -->
            <label>
                <input type="checkbox" name="activer_shortcode" value="1" <?php checked( get_option('activer_shortcode'), 1 ); ?> />
                Activer le shortcode
            </label>
            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}
add_action('admin_init', 'enregistrer_parametres');

function enregistrer_parametres() {
    register_setting('parametres-groupe', 'activer_shortcode');
}
$activer_shortcode = get_option('activer_shortcode');

if ($activer_shortcode) {
    [mes-services]
}



?>