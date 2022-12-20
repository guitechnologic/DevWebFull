SELECT nomeproduto, nomecategoria, nomefornecedor
FROM
    produto as p
    INNER JOIN categoria as c on p.categoriaID = c.categoriaID
    INNER JOIN fornecedores as f on p.fornecedorID = f.fornecedorID