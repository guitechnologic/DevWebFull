SELECT DISTINCT nomecompleto, telefone, email
FROM clientes c
INNER JOIN pedidos p ON c.clienteID = p.clienteID
INNER JOIN pedidos_item pi ON pi.pedidoID = p.pedidoID
WHERE produtoID = 2


