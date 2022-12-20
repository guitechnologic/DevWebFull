SELECT tempoEntrega, COUNT (pedidoID) AS total
FROM pedidos
GROUP BY tempoEntrega 
ORDER BY total DESC

------------------------------------------------------

SELECT statusPedido, SUM(valor_Pedido)
FROM pedidos
GROUP BY status_pedido

------------------------------------------------------


