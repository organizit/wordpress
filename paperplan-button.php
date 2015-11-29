<?php
 /*
    Plugin Name: PaperPlan Button
    Description: This plugin allows you to add PaperPlan Button on pages of your website.
 */
function prfx_custom_meta() {
    add_meta_box( 'prfx_meta', __( 'Paper Plan Meta', 'prfx-textdomain' ), 'prfx_meta_callback', 'page', 'normal' );
}
add_action( 'add_meta_boxes', 'prfx_custom_meta' );
/**
 * Outputs the content of the meta box
 */
function prfx_meta_callback( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'prfx_nonce' );
    $prfx_stored_meta = get_post_meta( $post->ID );
    $arrayPost = unserialize(get_post_meta($post->ID, 'paper_meta', true)); ?>

    <table class="paperplan">

      <tbody>
      <tr><th colspan="2" class="main-title-div">Add the button any where on your page using the  following code:<br/><label class="button-code"><?php echo htmlentities('<div class="paperplan-button" data-lang="fr"  data-title="" data-width="100" data-height="22"  data-theme="default"></div>'); ?></label><br/>Size, message, style language are  configurable, for more information consult our website</th></tr>
        <tr>
            <th>
                <label for="Site Name" class="prfx-row-title"><?php _e( 'Site Name <span class="star">*</span>:', 'prfx-textdomain' )?></label>
            </th>
            <td>
            <input type="text" name="paper_og:site_name" id="" value="<?php if ( isset ( $arrayPost['paper_og:site_name'] ) ) echo $arrayPost['paper_og:site_name']; ?>"required /><span class="comments-meta"><span class="comments-meta-pos"><?php _e(" ex: Name of your website or your company. Always use the exact same name" ); ?></span></span>
            </td>
        </tr>
        <tr>
            <th>
                <label for="Event ID" class="prfx-row-title"><?php _e( 'Event ID <span class="star">*</span>:', 'prfx-textdomain' )?></label>
            </th>
            <td>
                <input type="text" name="paper_pp:partnerid" id="" value="<?php if ( isset ( $arrayPost['paper_pp:partnerid'] ) ) echo $arrayPost['paper_pp:partnerid']; ?>" required /><span class="comments-meta"><span class="comments-meta-pos"><?php _e(" ex: ID has to be unique for each event or venue of your website. It has also to be changed if you update the event information later" ); ?></span></span>
            </td>
        </tr>
        <tr>
            <th>
                <label for="Title" class="prfx-row-title"><?php _e( 'Title <span class="star">*</span>:', 'prfx-textdomain' )?></label>
            </th>
            <td>
                <input type="text" name="paper_pp:title" id="" value="<?php if ( isset ( $arrayPost['paper_pp:title'] ) ) echo $arrayPost['paper_pp:title']; ?>" required /><span class="comments-meta"><span class="comments-meta-pos"><?php _e("ex: The Concert" ); ?></span></span>
            </td>
        </tr>
        <tr>
            <th>
                <label for="Description" class="prfx-row-title"><?php _e( 'Description:', 'prfx-textdomain' )?></label>
            </th>
            <td>
                <textarea rows="4" cols="50"  name="paper_pp:description"><?php if ( isset ( $arrayPost['paper_pp:description'] ) ) echo $arrayPost['paper_pp:description']; ?></textarea><span class="comments-meta comments-meta-background"><span class="comments-meta-textarea"><?php _e(" ex: A cool event" ); ?></span></span>

            </td>
        </tr>
        <tr>
            <th>
                <label for="Category" class="prfx-row-title"><?php _e( 'Category:', 'prfx-textdomain' )?></label>
            </th>
             <td>
                 <input type="text" name="paper_pp:category" id="" value="<?php if ( isset ( $arrayPost['paper_pp:category'] ) ) echo $arrayPost['paper_pp:category']; ?>" /><span class="comments-meta"><span class="comments-meta-pos"><?php _e(" ex: Concert" ); ?></span></span>
            </td>
         </tr>
         <tr>
            <th>
                <label for="Subcategory" class="prfx-row-title"><?php _e( 'Subcategory:', 'prfx-textdomain' )?></label>
            </th>
             <td>
                 <input type="text" name="paper_pp:subcategory" id="" value="<?php if ( isset ( $arrayPost['paper_pp:subcategory'] ) ) echo $arrayPost['paper_pp:subcategory']; ?>" /><span class="comments-meta"><span class="comments-meta-pos"><?php _e(" ex: Pop Rock" ); ?></span></span>

             </td>
        </tr>
        <tr>
            <th>
                 <label for="Price" class="prfx-row-title"><?php _e( 'Price:', 'prfx-textdomain' )?></label>
            </th>
            <td>

                 <input type="text" name="paper_pp:price" id="" value="<?php if ( isset ( $arrayPost['paper_pp:price'] ) ) echo $arrayPost['paper_pp:price']; ?>" /><span class="comments-meta"><span class="comments-meta-pos"><?php _e(" ex: 10$" ); ?></span></span>
             </td>
        </tr>
         <tr>
             <th>
                <label for="Event page URL" class="prfx-row-title"><?php _e( 'Event page URL:', 'prfx-textdomain' )?></label>
            </th>
             <td>
                 <input type="text" name="paper_pp:url" id="" value="<?php if ( isset ( $arrayPost['paper_pp:url'] ) ) echo $arrayPost['paper_pp:url']; ?>" /><span class="comments-meta"><span class="comments-meta-pos"><?php _e(" ex: http://www.yourwebsite.com/event" ); ?></span></span>
            </td>
        </tr>
        <tr>
            <th>
                <label for="Event image URL" class="prfx-row-title"><?php _e( 'Event image URL:', 'prfx-textdomain' )?></label>
             </th>
             <td>
                 <input type="text" name="paper_pp:image" id="" value="<?php if ( isset ( $arrayPost['paper_pp:image'] ) ) echo $arrayPost['paper_pp:image']; ?>" /><span class="comments-meta"><span class="comments-meta-pos"><?php _e(" ex: http://www.yourwebsite.com/event/image.png" ); ?></span></span>
            </td>
        </tr>
        <tr>
            <th>
                <label for="Start Date" class="prfx-row-title"><?php _e( 'Start Date:', 'prfx-textdomain' )?></label>
           </th>
             <td>
                 <input type="text" name="paper_pp:datestart" id="" value="<?php if ( isset ( $arrayPost['paper_pp:datestart'] ) ) echo $arrayPost['paper_pp:datestart']; ?>" /><span class="comments-meta"><span class="comments-meta-pos"><?php _e(" ex: 2014-01-01 10:00" ); ?></span></span>
             </td>
        </tr>
        <tr>
            <th>
                 <label for="End Date" class="prfx-row-title"><?php _e( 'End Date:', 'prfx-textdomain' )?></label>
            </th>
             <td>
                <input type="text" name="paper_pp:dateend" id="" value="<?php if ( isset ( $arrayPost['paper_pp:dateend'] ) ) echo $arrayPost['paper_pp:dateend']; ?>"
                /><span class="comments-meta"><span class="comments-meta-pos"><?php _e(" ex: 2014-01-02 18:00" ); ?></span></span>
            </td>
        </tr>
        <tr>
            <th>
                <label for="Venue name" class="prfx-row-title"><?php _e( 'Venue name:', 'prfx-textdomain' )?></label>
            </th>
             <td>
                 <input type="text" name="paper_pp:addressname" id="" value="<?php if ( isset ($arrayPost['paper_pp:addressname'] ) ) echo $arrayPost['paper_pp:addressname']; ?>" /><span class="comments-meta"><span class="comments-meta-pos"><?php _e(" ex: The Place To Be" ); ?></span></span>
            </td>
        </tr>
        <tr>
             <th>
                <label for="Address" class="prfx-row-title"><?php _e( 'Address:', 'prfx-textdomain' )?></label>
            </th>
            <td>
                <textarea rows="4" cols="50"  name="paper_pp:addressstreet"><?php if ( isset ( $arrayPost['paper_pp:addressstreet'] ) ) echo $arrayPost['paper_pp:addressstreet']; ?></textarea><span class="comments-meta comments-meta-background"><span class="comments-meta-textarea"><?php _e(" ex: 100 Main street" ); ?></span></span>
            </td>
        </tr>
        <tr>
            <th>
              <label for="Zip Code" class="prfx-row-title"><?php _e( 'Zip Code:', 'prfx-textdomain' )?></label>
             </th>
             <td>
                 <input type="text" name="paper_pp:addresspostcode" id="" value="<?php if ( isset($arrayPost['paper_pp:addresspostcode'] ) ) echo $arrayPost['paper_pp:addresspostcode']; ?>" /><span class="comments-meta"><span class="comments-meta-pos"><?php _e(" ex: 10001" ); ?></span></span>
             </td>
        </tr>
        <tr>
            <th>
              <label for="City" class="prfx-row-title"><?php _e( 'City:', 'prfx-textdomain' )?></label>
             </th>
             <td>
                 <input type="text" name="paper_pp:addresscity" id="" value="<?php if ( isset($arrayPost['paper_pp:addresscity'] ) ) echo $arrayPost['paper_pp:addresscity']; ?>" /><span class="comments-meta"><span class="comments-meta-pos"><?php _e(" ex: New York" ); ?></span></span>
             </td>
        </tr>
        <tr>
            <th>
                <label for="Country" class="prfx-row-title"><?php _e( 'Country:', 'prfx-textdomain' )?></label>
           </th>
            <td>
                 <input type="text" name="paper_pp:addresscountry" id="" value="<?php if ( isset ($arrayPost['paper_pp:addresscountry'] ) ) echo $arrayPost['paper_pp:addresscountry']; ?>" /><span class="comments-meta"><span class="comments-meta-pos"><?php _e(" ex: USA" ); ?></span></span>
             </td>
        </tr>
</tbody>
</table>

<style type="text/css">

table{
  width: 100%;
}
.paperplan td {
  display: inline-table;
  margin-top: 15px;
  line-height: 0;
}
.paperplan .star{
   color: #E72432;
}

.paperplan th {
  text-align: left;
  width: 200px;
  line-height: 0;
}

.comments-meta {
  background-image: url("<?php echo plugins_url( 'images/information.png', __FILE__ ); ?>");
  display: inline-block;
  height: 16px;
  margin-top: 8px;
  width: 16px;
  margin-left: 10px;
}

.comments-meta-background {
  position: relative;
  top: -40px;
}

.comments-meta-textarea {
  border: 1px solid #bbb;
  display: none;
  height: auto;
  line-height: 1;
  padding: 10px 0 20px 10px;
  position: absolute;
  right: -123px;
  text-align: left;
  width: 100px;
   background-color: #EEEEEE;
   margin-top:20px;
}
.comments-meta-pos {
  border: 1px solid #bbb;
  display: none;
  height: auto;
  line-height: 1;
  padding: 10px 0 20px 10px;
  position: absolute;
  right: 20px;
  text-align: left;
  width: 40%;
   background-color: #EEEEEE;
   margin-top:20px;
}
.main-title-div {
  background-color: #cccccc;
  border: 1px solid #bbb;
  color: red;
  font-size: 13px;
  padding: 10px;
  text-align: center !important;
  line-height: 2 !important;

}
.button-code {
  background: yellow;
  padding: 5px 2px;
}

.paperplan textarea {
  width: 60%;

}

</style>
<script>
jQuery(".comments-meta").mouseover(function() {
    jQuery(this).children(".comments-meta-pos").show();
}).mouseout(function() {
    jQuery(this).children(".comments-meta-pos").hide();
});
jQuery(".comments-meta").mouseover(function() {
    jQuery(this).children(".comments-meta-textarea").show();
}).mouseout(function() {
    jQuery(this).children(".comments-meta-textarea").hide();
});
</script>
<?php
}

/**
 * Saves the custom meta input
 */
function prfx_meta_save( $post_id ) {
    // Checks save status
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'prfx_nonce' ] ) && wp_verify_nonce( $_POST[ 'prfx_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
        if($_POST && !empty($_POST)) {

        foreach($_POST as $key=>$value)
        {
            $a = substr($key, 0, 6);
            if($value &&  $a=='paper_')
            {
                $arrayPost[$key] = $value;
            }
        }
        update_post_meta($post_id,'paper_meta', serialize($arrayPost));

 }
}
add_action( 'save_post', 'prfx_meta_save' );

function getPaperPageMeta(){
  global $post;

  $output = '';
   if(get_post_meta($post->ID, 'paper_meta', true) && $post)
   {
      $arrayPost = unserialize(get_post_meta($post->ID, 'paper_meta', true));
      foreach($arrayPost as $key => $value)
      {
           $output.='<meta property="'.str_replace('paper_', '', $key).'" content="'.$value.'">';
           $output.= "\n";
      }
      echo $output;
  }

}
add_action( 'wp_head', 'getPaperPageMeta');

function getPaperPageScript(){
   global $post;

   if(get_post_meta($post->ID, 'paper_meta', true) && $post)
   {

      echo $ouputScriptTwo = '<script>
        !function(t,e){var a=t.getElementsByClassName(e);if(a&&0!==a.length){var l=t.getElementsByTagName("meta"),n=t.documentElement.lang,i="http://www.paperplan.io/api/partners/",r=null,o="";n.split("-")&&2===n.split("-").length&&(n=n.split("-")[0]);for(var s=0;meta=l[s];s++){var p=meta.getAttribute("property"),b=meta.getAttribute("content");if(p&&"pp:"==p.substring(0,3)){var u=p.substring(3);o+="&"+u+"="+encodeURIComponent(b),"partner"!=u||r||(r=b)}else"og:site_name"==p&&(r=b)}i+=r.toLowerCase().replace(/\s/g,"")+"?"+o.substring(1);for(var s=0;button=a[s];s++){var g=parseInt(button.getAttribute("data-width"),10),d=parseInt(button.getAttribute("data-height"),10),h=button.getAttribute("data-theme"),m=button.getAttribute("data-lang")||n,y=button.getAttribute("data-title")||"";button.style.display="inline-block",button.style.position="relative";var c=t.createElement("span");c.style.width=g+"px",c.style.height=d+"px",c.style["vertical-align"]="bottom",c.style.display="inline-block",c.style.position="relative",button.appendChild(c);var v=t.createElement("iframe");v.setAttribute("src","http://www.paperplan.io/"+m+"/partners/button?width="+g+"&height="+d+"&theme="+h+"&lang="+m+"&title="+y),v.style.width=g+"px",v.style.height=d+"px",v.style.overflow="hidden",v.style.border="none",c.appendChild(v);var A=t.createElement("a");A.setAttribute("href",i),A.setAttribute("rel","nofollow"),A.setAttribute("target","_blank"),A.style.position="absolute",A.style.top="0px",A.style.left="0px",A.style.bottom="0px",A.style.right="0px",c.appendChild(A)}}}(document,"paperplan-button");
        </script>';
    }
}
add_action( 'wp_footer', 'getPaperPageScript');
