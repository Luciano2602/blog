delimiter $$
create procedure inserir_autor_login_nova(in nomeAutor varchar(25), sobre_nome_autor varchar(255), login varchar(10), senha varchar(10), email varchar(60), permissao char(1))
begin
	
    declare loginId int;
    declare idAutor int;
    
    insert into login (login,senha,email,permissao) values (login, senha, email, permissao);
    
    set loginId:= last_insert_id();
    
    insert into autor (nome,sobre_nome) values (nomeAutor, sobre_nome_autor);
    
    set idAutor:= last_insert_id();
    
    
    
    insert into autorlogin (id_autor, id_login) values (idAutor, loginId);
    

end $$
delimiter ;



