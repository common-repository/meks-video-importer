<table class="wp-list-table <?php echo esc_attr(implode(' ', $this->get_table_classes())); ?>">
    <thead>
        <tr>
            <?php $this->print_column_headers(); ?>
        </tr>
    </thead>

    <?php $list_type = $singular ? 'list:'. $singular : ''; ?>

    <tbody id="the-list" data-wp-lists="<?php echo esc_attr( $list_type ); ?>">
        <?php  $this->display_rows_or_placeholder(); ?>
    </tbody>

    <tfoot>
        <tr>
            <?php $this->print_column_headers(false); ?>
        </tr>
    </tfoot>
</table>