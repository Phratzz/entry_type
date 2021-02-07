		<tr>
			<td><?=form_input(sprintf('entry_type_options[0][%s][value]', $i), $value)?></td>
			<td><?=form_input(sprintf('entry_type_options[0][%s][label]', $i), $label)?></td>
			<td>
                <?php $keys = array_keys($fields); ?>
                <?php $last_key = end($keys); ?>
                <?php foreach ($fields as $field_key => $field_category) : ?>
                    <?php foreach ($field_category as $field_id => $field_row) : ?>
                    <label class="entry_type_hide_fields">
                    <?=form_checkbox(sprintf('entry_type_options[0][%s][hide_fields][]', $i), $field_id, in_array($field_id, $hide_fields))?>
                    <?=$field_row->field_label?> <i>(<?=$field_row->field_name?>)</i>
                    </label>
                    <?php endforeach; ?>
                    <?php if ($field_key != $last_key) :?>
                        <hr>
                    <?php endif; ?>
                <?php endforeach; ?>
            </td>
			<td><a href="javascript:void(0);" class="entry_type_remove_row"></a></td>
		</tr>
