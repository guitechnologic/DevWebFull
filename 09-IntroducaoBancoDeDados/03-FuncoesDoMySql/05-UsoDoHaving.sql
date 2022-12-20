SELECT statusPedido, SUM(valor_Pedido)
FROM pedidos
GROUP BY status_pedido
HAVING status_pedido <= 3