<?php
$fields = array(
	'author' =>
	'<p class="comment-form-author"><div class="form-group"><label for="author">' . __('Nombre', 'domainreference') . '</label> ' .
	( $req ? '<span class="required">*</span>' : '' ) .
	'<input id="author" class="form-control" name="author" type="text" value="' . esc_attr($commenter['comment_author']) .
	'" ' . $aria_req . ' /></div></p>',
	'email' =>
	'<p class="comment-form-email"><div class="form-group"><label for="email">' . __('Correo', 'domainreference') . '</label> ' .
	( $req ? '<span class="required">*</span>' : '' ) .
	'<input id="email" name="email" class="form-control" type="text" value="' . esc_attr($commenter['comment_author_email']) .
	'" ' . $aria_req . ' /></div></p>',
	'url' =>
	'<p class="comment-form-url"><div class="form-group"><label for="url">' . __('Dirección web', 'domainreference') . '</label>' .
	'<input id="url" name="url" class="form-control" type="text" value="' . esc_attr($commenter['comment_author_url']) .
	'"   /></p>',
);
$comments_args = array(
	// change "Leave a Reply" to "Comment"
	'title_reply' => 'Discuss this post ?',
	'fields' => apply_filters('comment_form_default_fields', $fields),
	'comment_field' => '<p class="comment-form-comment"><div class="form-group"><label for="comment">' . _x('Comment', 'noun') .
	'</label><textarea id="comment" name="comment" class="form-control"  rows="8" aria-required="true">' .
	'</textarea></div></p>',
	'comment_notes_after' => ' ');
?>
	<?php comment_form($comments_args); ?></div>