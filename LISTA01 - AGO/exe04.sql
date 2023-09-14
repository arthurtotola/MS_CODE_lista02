/*
4 - Dada a tabela "pedidos" com os campos "id_pedido", "data", "valor" e "status", escreva uma consulta para selecionar todos os pedidos que tenham sido realizados em 2023.
*/

SELECT id_pedido,data,valor,status FROM pedidos WHERE YEAR(data) = 2023;
