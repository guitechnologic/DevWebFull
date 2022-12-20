SELECT ps.nomestatus, SUM(valor_pedido)
FROM pedidos p
INNER JOIN pedidos_status ps ON p.status_pedido = ps.statusID

GROUP BY status_pedido
HAVING SUM(valor_pedido) >= 6000

-----------------------------------------------------------------

