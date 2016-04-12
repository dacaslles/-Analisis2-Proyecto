DELIMITER $$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_last_user`()
BEGIN
    DELETE FROM Usuario WHERE id_usuario = (SELECT MAX(id_usuario) from Usuario);
END