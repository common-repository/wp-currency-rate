<?php
/**
 * Represents the view for the public-facing component of the plugin.
 *
 * This typically includes any information, if any, that is rendered to the
 * frontend of the theme when the plugin is activated.
 *
 * @package   Wp_Currency_Rate 
 * @author    dotcomdotbd
 * @license   GPL-2.0+
 * @link      http://systway.com
 * @copyright 2014 Team Systway
 */


class wp_currency_rate_widget extends WP_Widget {
 
 
    /** constructor -- name this the same as the class above */
    function wp_currency_rate_widget() {
        parent::WP_Widget(false, $name = 'Currency Rate');	
    }
 
    /** @see WP_Widget::widget -- do not rename this */

    function widget($args, $instance) {	
        extract( $args );
        $title 		         = apply_filters('widget_title', $instance['title']);
       
      ?>
              <?php echo $before_widget; ?>
                  <?php if ( $title )
                        echo $before_title . $title . $after_title; ?>
                        <?php

                        $my_fields = get_option('wpcr_country_code');
                        $base_country = get_option('wpcr_base_country_code');

                        if(!empty($my_fields)){

                            $content="";
                            foreach ($my_fields as $country_list) {
                              
                                $content.='"'.$base_country.$country_list.'",';

                            }
                      
                            $converted_list = substr($content, 0, -1);
                      
                            /*************currency convertion***************/
                            $BASE_URL = "http://query.yahooapis.com/v1/public/yql";

                            $yql_query = 'select * from yahoo.finance.xchange where pair in('.$converted_list.')';


                            $yql_query_url = $BASE_URL . "?q=" . urlencode($yql_query) . "&format=json&env=store://datatables.org/alltableswithkeys";
                           
                            $session = curl_init($yql_query_url);
                            curl_setopt($session, CURLOPT_RETURNTRANSFER,true);
                            $json = curl_exec($session);
                            $phpObj =  json_decode($json);
                        }

                        else
                          $phpObj ="";
                        ?>
                        <table>
                            <thead>
                              <tr>
                                <th>Currency</th>
                                <th>Rate (<?php echo $base_country;?>)</th>

                                <?php if( get_option('wpcr_display_buy_rate')) 
                                  echo "<th>Buy rate (".$base_country.")</th>";
                                ?>
                                <?php if( get_option('wpcr_display_sale_rate')) 
                                  echo "<th>Sale rate (".$base_country.")</th>";
                                ?>
                                
                              </tr>
                            </thead>
                            <tbody>
                        <?php
                       
                            if(!empty($phpObj)){

                                
                                $count= $phpObj->query->count; //count the number of result

                                if($count==1){

                                  $currency= substr($phpObj->query->results->rate->id, 3, 3);
                                  echo "<tr><td>".$currency."</td>";
                                  echo "<td>".round($phpObj->query->results->rate->Rate, 2)."</td>";

                                  if( get_option('wpcr_display_buy_rate'))
                                  echo "<td>".round($phpObj->query->results->rate->Bid, 2)."</td>";

                                  if( get_option('wpcr_display_sale_rate')) 
                                  echo "<td>".round($phpObj->query->results->rate->Ask, 2)."</td>";

                                  echo "</tr>";
                                }
                                else{

                                    
                                  foreach($phpObj->query->results->rate as $event){

                                    $currency= substr($event->id, 3, 3);
                                  
                                    echo "<tr><td>".$currency."</td>";
                                    echo "<td>".round($event->Rate, 2)."</td>";

                                    if( get_option('wpcr_display_buy_rate'))
                                    echo "<td>".round($event->Bid, 2)."</td>";

                                    if( get_option('wpcr_display_sale_rate')) 
                                    echo "<td>".round($event->Ask, 2)."</td>";

                                    echo "</tr>";


                                  }
                              }
                            }
                            else
                              echo "<tr><td colspan='4'>No Currency Selected </td></tr>";
                        /*************end of currency convertion***************/



                      ?>
                      						</tbody>
                      </table>
    
              <?php echo $after_widget; ?>
        <?php
    }
 
    /** @see WP_Widget::update -- do not rename this */
    function update($new_instance, $old_instance) {		

		    $instance = $old_instance;
		    $instance['title']            = strip_tags($new_instance['title']);
		   
        return $instance;
    }
 
    /** @see WP_Widget::form -- do not rename this */
    function form($instance) {	
        
        $title   = (isset($instance['title']) ? esc_attr($instance['title']) : "");
        
        ?>
       
       <p>
          <label for="<?php echo $this->get_field_id('title'); ?>">Title:</label> 
          <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
        </p>

        <?php 
    }
 
 
} // end class contact_address_widget
add_action('widgets_init', create_function('', 'return register_widget("wp_currency_rate_widget");'));
?>