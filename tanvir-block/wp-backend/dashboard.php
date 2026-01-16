<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// === >>>> Dashboard Left side menu <<<< === \\
function tblock_setting_fun() {
  // echo '<div class="wrap"><h1>Tanvir Blocks Settings</h1><p>Welcome to the Tanvir Blocks settings page. Here you can configure the settings for Tanvir Blocks plugin.</p></div>';

  ?>
      <div class="tblocks_main_area">

        <div class="tblocks_body_area tblocks_common">

        <?php 
        $theme = wp_get_theme();

          // Check current theme OR parent theme is Virza
          if ( $theme->get('Name') === 'Vir Za' || ( $theme->parent() && $theme->parent()->get('Name') === 'Vir Za' )) { ?>

          <h3  class="sts-title"><?php echo esc_attr( '💐 Theme Global Setting ✩࿐︵‿︵‿︵‿︵👻' ); ?></h3>

          <h3 style="color: green;">Typography, Colors, Background, Shadows and Layout</h3>
          <p class="btn-youtube"><a href="<?php echo esc_url( 'https://map.com.bd/wp-admin/site-editor.php?canvas=edit&p=%2Fwp_template%2Fclg%2F%2Findex' ); ?>" target="_blank" class="tblock-bk-btn"><?php echo esc_html( '💎 Click Here' ); ?></a></p>
          <br>
          <br>
          <hr>
          <br>
          <?php } ?>
          <h3  class="sts-title"><?php echo esc_attr( '💐 Contact Details Global Setting ✩࿐︵‿︵‿︵‿︵👻' ); ?></h3>
          <form action="options.php" method="post">
            <?php wp_nonce_field('update-options'); ?>

            <table>
              <!-- <tr>
                <td>
                  <label for="ts1" name="tblock_ts_text_color"><?php // echo esc_attr( 'Text Color' ); ?></label>
                  <small><?php // echo esc_html( 'Add your Text Color' ); ?></small>
                </td>
                <td>
                  <input id="ts1" type="color" name="tblock_ts_text_color" value="<?php // echo get_option('tblock_ts_text_color') ?>">
                </td>
                <td>
                  <label for="ts2"><?php // echo esc_attr(__('Font size', 'tanvir-block')); ?></label>
                  <small><?php // echo esc_html( 'Default 24' ); ?></small>
                </td>
                <td>
                  <input id="ts2" type="number" name="tblock_ts_text_size" value="<?php echo get_option('tblock_ts_text_size') ?>">
                </td>
              </tr>
              <tr> -->
                <td>
                  <!-- text style -->
                  <label for="ts3" name="tblock_ts_text_style"><?php echo esc_attr(__('Phone Number', 'tanvir-block')); ?></label>
                  <small><?php echo esc_html( 'Ex:+8801795815660' ); ?></small>
                </td>
                <td>
                  <input id="ts3" type="text" name="tblock_ts_text_style" value="<?php echo get_option('tblock_ts_text_style') ?>">
                </td>
                <td>
                  <!-- Text Gap -->
                  <label for="ts4"><?php echo esc_attr(__('Email address', 'tanvir-block')); ?></label>
                  <small><?php echo esc_html( 'Enter your Email address' ); ?></small>
                </td>
                <td>
                  <input id="ts4" type="email" name="tblock_ts_text_gap" value="<?php echo get_option('tblock_ts_text_gap') ?>">
                </td>
              </tr>
              <tr>
                <td>
                  <!-- Text Direction -->
                  <label for="ts5"><?php echo esc_attr(__('Stick Number', 'tanvir-block')); ?></label>
                  <small><?php echo esc_html( 'Set stick number on footer in mobil' ); ?></small>
                </td>
                <td>
                  <select name="tblock_ts_text_dir" id="ts5">
                    <option value="yes" <?php if( get_option('tblock_ts_text_dir') == 'yes'){ echo 'selected="selected"'; } ?>><?php echo esc_html( 'Enable WhatsApp' ); ?></option>
                    <option value="no" <?php if( get_option('tblock_ts_text_dir') == 'no'){ echo 'selected="selected"'; } ?>><?php echo esc_html( 'Disable WhatsApp' ); ?></option>
                  </select>
                </td>
                <!-- <td>
                  <label for="ts6"><?php // echo esc_attr(__('Text Duration', 'tanvir-block')); ?></label>
                  <small><?php // echo esc_html( '1000ms = 1s Default 10000' ); ?></small>
                </td>
                <td>
                  <input id="ts6" type="number" name="tblock_ts_text_dur" value="<?php echo get_option('tblock_ts_text_dur') ?>">
                </td> -->
              </tr>
              <!-- <tr>
                <td>
                  <label for="ts7"><?php // echo esc_attr(__('Scroll Text', 'tanvir-block')); ?></label>
                  <small><?php // echo esc_html( 'Enter your Scroll Text' ); ?></small>
                </td>
                <td colspan="3">
                  <input id="ts7" type="text" name="tblock_ts_text" value="<?php // echo get_option('tblock_ts_text') ?>">
                </td>
              </tr>
              <tr>
                <td>
                  <label><?php // echo esc_attr(__('Start Visible', 'tanvir-block')); ?></label>
                  <small><?php // echo esc_html( 'Default No' ); ?></small>
                </td>
                <td>
                  <div class="radio-wrap">
                    <label class="radios">
                      <input type="radio" name="tblock_ts_start_visible" value="false"  <?php // if( get_option('tblock_ts_start_visible') == 'false'){ echo 'checked="checked"'; } ?> id="tblock_ts_start_visible-no" ><span><?php // echo esc_html( 'No' ); ?></span>
                    </label>
                    <label class="radios">
                      <input type="radio" name="tblock_ts_start_visible" value="true" <?php // if( get_option('tblock_ts_start_visible') == 'true'){ echo 'checked="checked"'; } ?> id="tblock_ts_start_visible-yes"><span><?php // echo esc_html( 'Yes' ); ?></span>
                    </label>
                  </div>
                </td>
              </tr> -->
            </table>

            <!-- Round Corner -->
            <input type="hidden" name="action" value="update">
            <input type="hidden" name="page_options" value="tblock_ts_text_color, tblock_ts_text_size, tblock_ts_text_style, tblock_ts_text_gap, tblock_ts_text_dir, tblock_ts_text_dur, tblock_ts_text, tblock_ts_start_visible">
            <input type="submit" name="submit" value="<?php _e('Save Changes', 'tanvir-block') ?>">
          </form>
        </div>

        <div class="tblocks_sidebar_area tblocks_common">
          <h3 class="sts-title"><?php echo esc_attr( '⭐☜ Preview ☞⭐' ); ?></h3>
          <div>
            
            <?php echo do_shortcode('[callnow wapp="yes"]'); ?>

          </div>

          <h3 class="sts-title"> </h3><br>
          <h3 class="sts-title-sub"><?php echo esc_attr( '✍️ Manual [callnow wapp="yes"]' ); ?></h3>
          <small><?php echo esc_html( 'Please use shortcod [callnow wapp="yes"] 🎉 anywhere.' ); ?></small>
          <p><?php echo esc_html( 'If you need multiple, you will use shortcode [sts move="Any text here"] just like this, anywhere' ); ?></p>
          <br>
          <h3 class="sts-title"><?php echo esc_html( '乂❤‿❤乂' ); ?></h3>
          
          <br>
          <br>
          <p class="btn-youtube"><a href="<?php echo esc_url( 'https://www.youtube.com/@1mdalamin1' ); ?>" target="_blank" class="btn"><?php echo esc_html( '💎 Watch On YouTube' ); ?></a><img src="<?php echo esc_url( plugin_dir_url( __FILE__ ) . '/img/logo.png' ); ?>" alt=""></p>
          

        </div>

      </div>
    <?php


}
