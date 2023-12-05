<?php
include("config.php");

switch($_REQUEST["acao"]){
    case 'create':
        $Nome= $_POST["Nome"];
        $IDFuncao= $_POST["IDFuncao"];
        $IDContrato= $_POST["IDContrato"];
        
        $sql = "INSERT INTO Funcionario (Nome,IDFuncao,IDContrato)
        VALUES ('{$Nome}','{$IDFuncao}','{$IDContrato}')";
        $res=$conexao->query($sql);

        break;
    case 'update':
        $Nome= $_POST["Nome"];
        $IDFuncao= $_POST["IDFuncao"];
        $IDContrato= $_POST["IDContrato"];

        $sql = "UPDATE Funcionario SET Nome='{$Nome}',IDFuncao='{$IDFuncao}',
        IDContrato='{$IDContrato}' WHERE ID=".$_REQUEST["ID"];
        $res = $conexao->query($sql);

        break;
    case 'read':
        //dasd
        break;
    case 'delete':
        $sql = "DELETE FROM Funcionario WHERE ID=".$_REQUEST["ID"]
        break;
}
