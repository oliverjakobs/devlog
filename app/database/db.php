<?php

require('connect.php');

function dd($value)
{
    echo "<pre>", print_r($value, true), "</pre>";
    die();
}

function executeQuery($sql, $data = [])
{
    global $connection;

    $stmt = $connection->prepare($sql);

    if (!empty($data))
    {
        $values = array_values($data);
        $types = str_repeat('s', count($values));
        $stmt->bind_param($types, ...$values);
    }

    $stmt->execute();

    return $stmt;
}

function selectAll($table, $conditions = [])
{
    $sql = "SELECT * FROM $table";

    $i = 0;
    foreach ($conditions as $key => $value) 
    {
        $sql = $sql . ($i === 0 ? " WHERE" : " AND") . " $key=?";
        $i++;
    }

    $stmt = executeQuery($sql, $conditions);
    return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
}

function selectOne($table, $conditions = [])
{
    $sql = "SELECT * FROM $table";

    $i = 0;
    foreach ($conditions as $key => $value) 
    {
        $sql = $sql . ($i === 0 ? " WHERE" : " AND") . " $key=?";
        $i++;
    }

    $sql = $sql . " LIMIT 1";

    $stmt = executeQuery($sql, $conditions);
    return $stmt->get_result()->fetch_assoc();
}

function create($table, $data)
{
    $sql = "INSERT INTO $table";

    $i = 0;
    foreach ($data as $key => $value) 
    {
        $sql = $sql . ($i === 0 ? " SET" : ",") . " $key=?";
        $i++;
    }

    $stmt = executeQuery($sql, $data);
    return $stmt->insert_id;
}

function update($table, $id, $data)
{
    $sql = "UPDATE $table";

    $i = 0;
    foreach ($data as $key => $value) 
    {
        $sql = $sql . ($i === 0 ? " SET" : ",") . " $key=?";
        $i++;
    }

    $sql = $sql . " WHERE id=?";

    $data['id'] = $id;
    $stmt = executeQuery($sql, $data);
    return $stmt->affected_rows;
}

function delete($table, $id)
{
    $sql = "DELETE FROM $table WHERE id=?";

    $stmt = executeQuery($sql, ['id' => $id]);
    return $stmt->affected_rows;
}

$id = delete('users', 2);

dd($id);