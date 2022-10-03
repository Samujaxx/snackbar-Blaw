<?php
            

function get_enum_values($conn, $table, $field)
{
    $type = $conn->query("SHOW COLUMNS FROM {$table} WHERE Field = '{$field}'")->fetch_row()[1];
    preg_match("/^enum\(\'(.*)\'\)$/", $type, $matches);
    $enum = explode("','", $matches[1]);
    return $enum;
}
