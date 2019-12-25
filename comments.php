<?php
if ( post_password_required() ) {
    return;
}
if ( have_comments() ) :
    ?>
    <div class="row comment-layout">
        <h3 class="comments-count p-50">
            <?php
            $tuhin_comment_count = get_comments_number();
            if ($tuhin_comment_count<=1) {
                printf(
                    $tuhin_comment_count .' '.
                    esc_html__( 'Comment', 'tuhin' )
                );
            } else {
                printf(
                    $tuhin_comment_count.' '.
                    esc_html__( 'Comments', 'tuhin' )
                );
            }
            ?>
        </h3>
        <div class="media">
            <?php wp_list_comments(); ?>
        </div>

    </div>
    <div class="row contact-content-wrap pt-50">
        <div class="contact-form col-md-12">
            <div class="row">
                <?php
                $tuhin_comment_fields = array();
                $tuhin_name_field_placeholder = __('Name','tuhin');
                $tuhin_email_field_placeholder = __('Email','tuhin');
                $tuhin_message_field_placeholder = __('Your Message','tuhin');
                $tuhin_submit_field_placeholder = __('Submit Comment','tuhin');
                $tuhin_comment_fields['author']=<<<EOD
<div class="col-md-6">
                    <div class="input-group">
                        <input type="text" name="author" placeholder="{$tuhin_name_field_placeholder}" id="author">
                    </div>
                </div>
EOD;
                $tuhin_comment_fields['email']=<<<EOD
<div class="col-md-6">
                    <div class="input-group">
                        <input type="text" name="email" placeholder="{$tuhin_email_field_placeholder}" id="email">
                    </div>
                </div>
EOD;
                $tuhin_comment_field=<<<EOD
<div class="col-md-12">
                    <div class="input-group">
                        <textarea name="comment" placeholder="{$tuhin_message_field_placeholder}" id="comment"></textarea>
                    </div>
                </div>
EOD;
                $tuhin_comment_submit_button=<<<EOD
<div class="col-md-12 text-center">
                    <input type="submit" class="btn btn-medium btn-inline btn-fill"
                           value="{$tuhin_submit_field_placeholder}">
                </div>
EOD;
                $tuhin_comment_form_arguments=array(
                    'fields'=>$tuhin_comment_fields,
                    'comment_field'=> $tuhin_comment_field,
                    'submit_button'=>$tuhin_comment_submit_button,
                    'title_reply'=>__('Leave A Comment', 'tuhin')
                );
                comment_form($tuhin_comment_form_arguments); ?>
            </div>
        </div>
    </div>
<?php endif; ?>