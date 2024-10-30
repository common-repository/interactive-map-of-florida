<?php $flr_map = $this->options; ?>
<form method="post" action="<?php echo admin_url( '/' ); ?>admin.php?page=flr-map">
<div id="map-admin">
  <div id="map-header">
    <p class="map-shortcode">Insert this shortcode <input type="text" value="[flr_map]" readonly> into any page or post to display the map.</p>
    <p class="map-btns"><span class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Save Changes"></span></p>
  </div>
  <div id="map-page">
    <div class="map-col-lt">
      <div id="map-preview">
        <?php include 'map.php'; ?>
      </div>
      <div class="map-settings">
        <div class="box-header individ-i">Settings</div>
        <div class="box-body">

          <div class="area"><p class="area-name">CENTRAL EAST FLORIDA</p>
            <span class="chkbx"><input type="checkbox" name="enbl_1" value="1" <?php if ($flr_map['enbl_1'] == '1'){echo " checked";} ?>>&nbsp;Active</span>
            <div class="inner-content">
              <div class="area-clrs">
                <p><label>Up Color</label><input type="text" name="upclr_1" value="<?php echo $flr_map['upclr_1']; ?>" class="color-field" /></p>              
                <p><label>Hover Color</label><input type="text" name="ovrclr_1" value="<?php echo $flr_map['ovrclr_1']; ?>" class="color-field" /></p>              
                <p><label>Click Color</label><input type="text" name="dwnclr_1" value="<?php echo $flr_map['dwnclr_1']; ?>" class="color-field" /></p>             
              </div>
              <div class="area-url">
                <p class="link"><label>Link</label><input type="text" name="url_1" value="<?php echo $flr_map['url_1']; ?>" /></p>
                <p><label>Target</label>
                  <select name="turl_1">
                    <option value="_self" <?php if($flr_map['turl_1'] == '_self'){echo "selected";} ?>>Same Page</option>
                    <option value="_blank" <?php if($flr_map['turl_1'] == '_blank'){echo "selected";} ?>>New Page</option>
                    <option value="none" <?php if($flr_map['turl_1'] == 'none'){echo "selected";} ?>>None</option>
                  </select>
                </p>
              </div>
              <div class="info"><p><textarea rows="5" name="info_1"><?php echo $flr_map['info_1']; ?></textarea></p></div>
            </div>
          </div>

          <div class="area"><p class="area-name">CENTRAL FLORIDA</p>
            <span class="chkbx"><input type="checkbox" name="enbl_2" value="1" <?php if ($flr_map['enbl_2'] == '1'){echo " checked";} ?>>&nbsp;Active</span>
            <div class="inner-content">
              <div class="area-clrs">
                <p><label>Up Color</label><input type="text" name="upclr_2" value="<?php echo $flr_map['upclr_2']; ?>" class="color-field" /></p>              
                <p><label>Hover Color</label><input type="text" name="ovrclr_2" value="<?php echo $flr_map['ovrclr_2']; ?>" class="color-field" /></p>              
                <p><label>Click Color</label><input type="text" name="dwnclr_2" value="<?php echo $flr_map['dwnclr_2']; ?>" class="color-field" /></p>             
              </div>
              <div class="area-url">
                <p class="link"><label>Link</label><input type="text" name="url_2" value="<?php echo $flr_map['url_2']; ?>" /></p>
                <p><label>Target</label>
                  <select name="turl_2">
                    <option value="_self" <?php if($flr_map['turl_2'] == '_self'){echo "selected";} ?>>Same Page</option>
                    <option value="_blank" <?php if($flr_map['turl_2'] == '_blank'){echo "selected";} ?>>New Page</option>
                    <option value="none" <?php if($flr_map['turl_2'] == 'none'){echo "selected";} ?>>None</option>
                  </select>
                </p>
              </div>
              <div class="info"><p><textarea rows="5" name="info_2"><?php echo $flr_map['info_2']; ?></textarea></p></div>
            </div>
          </div>

          <div class="area"><p class="area-name">CENTRAL WEST FLORIDA</p>
            <span class="chkbx"><input type="checkbox" name="enbl_3" value="1" <?php if ($flr_map['enbl_3'] == '1'){echo " checked";} ?>>&nbsp;Active</span>
            <div class="inner-content">
              <div class="area-clrs">
                <p><label>Up Color</label><input type="text" name="upclr_3" value="<?php echo $flr_map['upclr_3']; ?>" class="color-field" /></p>              
                <p><label>Hover Color</label><input type="text" name="ovrclr_3" value="<?php echo $flr_map['ovrclr_3']; ?>" class="color-field" /></p>              
                <p><label>Click Color</label><input type="text" name="dwnclr_3" value="<?php echo $flr_map['dwnclr_3']; ?>" class="color-field" /></p>             
              </div>
              <div class="area-url">
                <p class="link"><label>Link</label><input type="text" name="url_3" value="<?php echo $flr_map['url_3']; ?>" /></p>
                <p><label>Target</label>
                  <select name="turl_3">
                    <option value="_self" <?php if($flr_map['turl_3'] == '_self'){echo "selected";} ?>>Same Page</option>
                    <option value="_blank" <?php if($flr_map['turl_3'] == '_blank'){echo "selected";} ?>>New Page</option>
                    <option value="none" <?php if($flr_map['turl_3'] == 'none'){echo "selected";} ?>>None</option>
                  </select>
                </p>
              </div>
              <div class="info"><p><textarea rows="5" name="info_3"><?php echo $flr_map['info_3']; ?></textarea></p></div>
            </div>
          </div>

          <div class="area"><p class="area-name">NORTH CENTRAL FLORIDA</p>
            <span class="chkbx"><input type="checkbox" name="enbl_4" value="1" <?php if ($flr_map['enbl_4'] == '1'){echo " checked";} ?>>&nbsp;Active</span>
            <div class="inner-content">
              <div class="area-clrs">
                <p><label>Up Color</label><input type="text" name="upclr_4" value="<?php echo $flr_map['upclr_4']; ?>" class="color-field" /></p>              
                <p><label>Hover Color</label><input type="text" name="ovrclr_4" value="<?php echo $flr_map['ovrclr_4']; ?>" class="color-field" /></p>              
                <p><label>Click Color</label><input type="text" name="dwnclr_4" value="<?php echo $flr_map['dwnclr_4']; ?>" class="color-field" /></p>             
              </div>
              <div class="area-url">
                <p class="link"><label>Link</label><input type="text" name="url_4" value="<?php echo $flr_map['url_4']; ?>" /></p>
                <p><label>Target</label>
                  <select name="turl_4">
                    <option value="_self" <?php if($flr_map['turl_4'] == '_self'){echo "selected";} ?>>Same Page</option>
                    <option value="_blank" <?php if($flr_map['turl_4'] == '_blank'){echo "selected";} ?>>New Page</option>
                    <option value="none" <?php if($flr_map['turl_4'] == 'none'){echo "selected";} ?>>None</option>
                  </select>
                </p>
              </div>
              <div class="info"><p><textarea rows="5" name="info_4"><?php echo $flr_map['info_4']; ?></textarea></p></div>
            </div>
          </div>

          <div class="area"><p class="area-name">NORTHEAST FLORIDA</p>
            <span class="chkbx"><input type="checkbox" name="enbl_5" value="1" <?php if ($flr_map['enbl_5'] == '1'){echo " checked";} ?>>&nbsp;Active</span>
            <div class="inner-content">
              <div class="area-clrs">
                <p><label>Up Color</label><input type="text" name="upclr_5" value="<?php echo $flr_map['upclr_5']; ?>" class="color-field" /></p>              
                <p><label>Hover Color</label><input type="text" name="ovrclr_5" value="<?php echo $flr_map['ovrclr_5']; ?>" class="color-field" /></p>              
                <p><label>Click Color</label><input type="text" name="dwnclr_5" value="<?php echo $flr_map['dwnclr_5']; ?>" class="color-field" /></p>             
              </div>
              <div class="area-url">
                <p class="link"><label>Link</label><input type="text" name="url_5" value="<?php echo $flr_map['url_5']; ?>" /></p>
                <p><label>Target</label>
                  <select name="turl_5">
                    <option value="_self" <?php if($flr_map['turl_5'] == '_self'){echo "selected";} ?>>Same Page</option>
                    <option value="_blank" <?php if($flr_map['turl_5'] == '_blank'){echo "selected";} ?>>New Page</option>
                    <option value="none" <?php if($flr_map['turl_5'] == 'none'){echo "selected";} ?>>None</option>
                  </select>
                </p>
              </div>
              <div class="info"><p><textarea rows="5" name="info_5"><?php echo $flr_map['info_5']; ?></textarea></p></div>
            </div>
          </div>

          <div class="area"><p class="area-name">NORTHWEST FLORIDA PANHANDLE</p>
            <span class="chkbx"><input type="checkbox" name="enbl_6" value="1" <?php if ($flr_map['enbl_6'] == '1'){echo " checked";} ?>>&nbsp;Active</span>
            <div class="inner-content">
              <div class="area-clrs">
                <p><label>Up Color</label><input type="text" name="upclr_6" value="<?php echo $flr_map['upclr_6']; ?>" class="color-field" /></p>              
                <p><label>Hover Color</label><input type="text" name="ovrclr_6" value="<?php echo $flr_map['ovrclr_6']; ?>" class="color-field" /></p>              
                <p><label>Click Color</label><input type="text" name="dwnclr_6" value="<?php echo $flr_map['dwnclr_6']; ?>" class="color-field" /></p>             
              </div>
              <div class="area-url">
                <p class="link"><label>Link</label><input type="text" name="url_6" value="<?php echo $flr_map['url_6']; ?>" /></p>
                <p><label>Target</label>
                  <select name="turl_6">
                    <option value="_self" <?php if($flr_map['turl_6'] == '_self'){echo "selected";} ?>>Same Page</option>
                    <option value="_blank" <?php if($flr_map['turl_6'] == '_blank'){echo "selected";} ?>>New Page</option>
                    <option value="none" <?php if($flr_map['turl_6'] == 'none'){echo "selected";} ?>>None</option>
                  </select>
                </p>
              </div>
              <div class="info"><p><textarea rows="5" name="info_6"><?php echo $flr_map['info_6']; ?></textarea></p></div>
            </div>
          </div>

          <div class="area"><p class="area-name">SOUTHEAST FLORIDA</p>
            <span class="chkbx"><input type="checkbox" name="enbl_7" value="1" <?php if ($flr_map['enbl_7'] == '1'){echo " checked";} ?>>&nbsp;Active</span>
            <div class="inner-content">
              <div class="area-clrs">
                <p><label>Up Color</label><input type="text" name="upclr_7" value="<?php echo $flr_map['upclr_7']; ?>" class="color-field" /></p>              
                <p><label>Hover Color</label><input type="text" name="ovrclr_7" value="<?php echo $flr_map['ovrclr_7']; ?>" class="color-field" /></p>              
                <p><label>Click Color</label><input type="text" name="dwnclr_7" value="<?php echo $flr_map['dwnclr_7']; ?>" class="color-field" /></p>             
              </div>
              <div class="area-url">
                <p class="link"><label>Link</label><input type="text" name="url_7" value="<?php echo $flr_map['url_7']; ?>" /></p>
                <p><label>Target</label>
                  <select name="turl_7">
                    <option value="_self" <?php if($flr_map['turl_7'] == '_self'){echo "selected";} ?>>Same Page</option>
                    <option value="_blank" <?php if($flr_map['turl_7'] == '_blank'){echo "selected";} ?>>New Page</option>
                    <option value="none" <?php if($flr_map['turl_7'] == 'none'){echo "selected";} ?>>None</option>
                  </select>
                </p>
              </div>
              <div class="info"><p><textarea rows="5" name="info_7"><?php echo $flr_map['info_7']; ?></textarea></p></div>
            </div>
          </div>

          <div class="area"><p class="area-name">SOUTHWEST FLORIDA</p>
            <span class="chkbx"><input type="checkbox" name="enbl_8" value="1" <?php if ($flr_map['enbl_8'] == '1'){echo " checked";} ?>>&nbsp;Active</span>
            <div class="inner-content">
              <div class="area-clrs">
                <p><label>Up Color</label><input type="text" name="upclr_8" value="<?php echo $flr_map['upclr_8']; ?>" class="color-field" /></p>              
                <p><label>Hover Color</label><input type="text" name="ovrclr_8" value="<?php echo $flr_map['ovrclr_8']; ?>" class="color-field" /></p>              
                <p><label>Click Color</label><input type="text" name="dwnclr_8" value="<?php echo $flr_map['dwnclr_8']; ?>" class="color-field" /></p>             
              </div>
              <div class="area-url">
                <p class="link"><label>Link</label><input type="text" name="url_8" value="<?php echo $flr_map['url_8']; ?>" /></p>
                <p><label>Target</label>
                  <select name="turl_8">
                    <option value="_self" <?php if($flr_map['turl_8'] == '_self'){echo "selected";} ?>>Same Page</option>
                    <option value="_blank" <?php if($flr_map['turl_8'] == '_blank'){echo "selected";} ?>>New Page</option>
                    <option value="none" <?php if($flr_map['turl_8'] == 'none'){echo "selected";} ?>>None</option>
                  </select>
                </p>
              </div>
              <div class="info"><p><textarea rows="5" name="info_8"><?php echo $flr_map['info_8']; ?></textarea></p></div>
            </div>
          </div>

        </div><!-- box-body / for areas -->
      </div><!-- map-settings / for areas -->

      <br>
      <div class="map-settings">
        <div class="box-header bulk-i">Bulk Edit</div>
        <div class="box-body">
          <div class="area"><p class="area-name">COLORS</p>
            <div class="inner-content">
              <div class="area-clrs">
                <p><label>Up Color</label><input type="text" name="upclr_all" value="<?php echo $flr_map['upclr_1']; ?>" class="color-field" /></p>              
                <p><label>Hover Color</label><input type="text" name="ovrclr_all" value="<?php echo $flr_map['ovrclr_1']; ?>" class="color-field" /></p>              
                <p><label>Click Color</label><input type="text" name="dwnclr_all" value="<?php echo $flr_map['dwnclr_1']; ?>" class="color-field" /></p>             
              </div><hr>
              <p><span class="submitbulk"><input type="submit" class="button button-primary" name="submit-clrs" value="Overwrite Colors"></span> <strong>Note: Clicking this button will overwrite the colors of the <u>entire</u> map.</strong></p>
            </div>
          </div>
          <div class="area"><p class="area-name">LINK</p>
            <div class="inner-content">
              <div class="area-url">
                <p class="link"><label>Link</label><input type="text" name="url_all" value="<?php echo $flr_map['url_1']; ?>" /></p>
                <p><label>Target</label>
                  <select name="turl_all">
                    <option value="_self" <?php if($flr_map['turl_1'] == '_self'){echo "selected";} ?>>Same Page</option>
                    <option value="_blank" <?php if($flr_map['turl_1'] == '_blank'){echo "selected";} ?>>New Page</option>
                    <option value="none" <?php if($flr_map['turl_1'] == 'none'){echo "selected";} ?>>None</option>
                  </select>
                </p>
              </div><hr>              
              <p><span class="submitbulk"><input type="submit" class="button button-primary" name="submit-url" value="Overwrite Links"></span> <strong>Note: Clicking this button will overwrite the links of <u>all</u> the regions.</strong></p>
            </div>
          </div>
          <div class="area"><p class="area-name">INFO.</p>
            <div class="inner-content">
              <div class="info"><p><textarea rows="5" name="info_all"><?php echo $flr_map['info_1']; ?></textarea></p></div><hr>
              <p><span class="submitbulk"><input type="submit" class="button button-primary" name="submit-info" value="Overwrite Info."></span> <strong>Note: Clicking this button will overwrite the info. of <u>all</u> the regions.</strong></p>
            </div>
          </div>
        </div><!-- box-body / for bulk -->
      </div><!-- map-settings / for bulk -->

    </div><!-- map-col-lt -->

    <!-- General Map Colors -->
    <div class="map-col-rt">
      <div class="map-settings">
        <div class="box-header shape-icon">General Settings</div>
        <div class="box-body">
          <div class="general-box"><span class="general-set i-border">Border Color</span><input type="text" name="borderclr" value="<?php echo $flr_map['borderclr']; ?>" class="color-field" /></div>
          <div class="general-box"><span class="general-set i-abbs">Visible Names</span><input type="text" name="visnames" value="<?php echo $flr_map['visnames']; ?>" class="color-field" /></div>
        </div><!-- box-body -->
      </div><!-- map-settings -->
      <p><strong>Hint:</strong> you can set any color as transparent to hide the object.</p>
      <a href="https://www.wpmapplugins.com/states/interactive-map-of-florida-wordpress-plugin.html" title="Interactive Map of Florida - Premium"><img src="<?php echo FLRMAP_URL . 'images/florida-premium.png'; ?>" alt="Interactive Map of Florida - Premium"></a>
    </div><!-- map-col-rt -->

    <input type="hidden" name="flr_map">
      <?php
      settings_fields(__FILE__);
      do_settings_sections(__FILE__);
      ?>
    <p class="map-btns"><span class="submit"><input type="submit" name="restore_default" id="submit" class="button" value="Restore Default"></span></p>
    <div class="scroll-top"><span class="scroll-top-icon"></span></div>
    <!--scroll-top script-->
    <script>
      jQuery(function(){jQuery(document).on( 'scroll', function(){ if (jQuery(window).scrollTop() > 100) {jQuery('.scroll-top').addClass('show');} else {jQuery('.scroll-top').removeClass('show');}});jQuery('.scroll-top').on('click', scrollToTop);});function scrollToTop() {verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;element = jQuery('body');offset = element.offset();offsetTop = offset.top -32;jQuery('html, body').animate({scrollTop: offsetTop}, 500, 'linear');}
    </script>

  </div><!-- map-page -->
</div><!-- map-admin -->
</form>
