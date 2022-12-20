SELECT nomeproduto, nomefornecedor
FROM produtos, fornecedores
WHERE produtos.fornecedorID = fornecedores.fornecedoresID

---------------------------------------------------------
SELECT 
    nomeproduto, nomefornecedor
FROM
    produtos as p
INNER JOIN
    fornecedores as f
ON
    p.fornecedorID = f.fornecedorID

---------------------------------------------------------




