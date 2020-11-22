<?php
        //Enter your code here, enjoy!

$a = [
    'name' => 'my_name',
    'price' => 100
];

$b = [
   'weight' => 50,
   'color' => 'red',
   'brand' => 'sony'
];


function insertSqlStatement(array $fields, string $tableName): string
{
    $sql = '';
    $sql = 'INSERT INTO table_name (';
    $tableFields = '';
    $values = '';
    
    foreach ($fields as $key => $val) {
        $tableFields .= $key . ', ';
        $values .= "'$val'" . ',';
    }
    
    $sql .= $tableFields . ')';
    $sql .=  'VALUES (' . $values . ');';
    
    return $sql;
}
// INSERT INTO table_name (column1, column2, column3, ...)
// VALUES (value1, value2, value3, ...);
echo insertSqlStatement($b, 'product');