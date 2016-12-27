<div id="fl-bb-dashboard-welcome-form" class="fl-settings-form">
    <h2 style="display: none;"><?php _e('Dashboard Welcome', 'bbpd'); ?></h2>
    <form method="post" id="pd-settings-form" action="<?php FLBuilderAdminSettings::render_form_action( 'bb-dashboard-welcome' ); ?>">
        <div class="icon32 icon32-pd-settings" id="icon-pd"><br /></div>
        <table class="bbpd-settings-table wp-list-table widefat">
            <tr valign="top">
                <th scope="row" valign="top">
                    <strong><?php esc_html_e('User Role', 'bbpd'); ?></strong>
                </th>
                <th scope="row" valign="top">
                    <strong><?php esc_html_e('Select Template', 'bbpd'); ?></strong>
                </th>
            </tr>
            <?php $count = 0; foreach ( self::$roles as $key => $value ) : ?>
                <tr class="<?php echo $count % 2 == 0 ? 'alternate' : ''; ?>">
                    <td><?php echo $value; ?></td>
                    <td>
                        <select name="bbpd_template[<?php echo $key; ?>]" class="bbpd-input">
                            <option value="none"<?php echo self::get_selected( $key, 'none', self::$template ); ?>><?php esc_html_e('None', 'bbpd'); ?></option>
                            <?php foreach ( self::$templates as $template ) { ?>
                                <option value="<?php echo $template['slug']; ?>"<?php echo self::get_selected( $key, $template['slug'], self::$template ); ?>><?php echo $template['name']; ?></option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
            <?php $count++; endforeach; ?>
        </table>
        <?php submit_button(); ?>
        <?php wp_nonce_field('bbpd-settings', 'bbpd-settings-nonce'); ?>
    </form>
</div>
