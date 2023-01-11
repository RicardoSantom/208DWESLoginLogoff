use DB208DWESLoginLogoff;
-- Inserción de datos en la tabla Departamento.
insert into T02_Departamento (T02_CodDepartamento,T02_DescDepartamento,T02_FechaCreacionDepartamento,T02_VolumenNegocio) 
values("DAW","Despliegue Aplcaciones Web",1668384061,2000);
insert into T02_Departamento  (T02_CodDepartamento,T02_DescDepartamento,T02_FechaCreacionDepartamento,T02_VolumenNegocio) 
values("DWC","Desarrollo Web Entorno Cliente",1668384061,1000);
insert into T02_Departamento  (T02_CodDepartamento,T02_DescDepartamento,T02_FechaCreacionDepartamento,T02_VolumenNegocio)
 values("DWS","Desarrollo Web Entorno Servidor",1668384061,3000);
insert into T02_Departamento  (T02_CodDepartamento,T02_DescDepartamento,T02_FechaCreacionDepartamento,T02_VolumenNegocio)
 values("DIW","Diseño Interfaces Web",1668384061,4000);
insert into T02_Departamento  (T02_CodDepartamento,T02_DescDepartamento,T02_FechaCreacionDepartamento,T02_VolumenNegocio)
 values("EIE","Empresa e Iniciativa Emprendedora",1668384061,2);
-- Inserción de datos en la tabla Usuario.
insert into T01_Usuario(T01_CodUsuario,T01_Password,T01_DescUsuario,T01_FechaHoraUltimaConexion) values
('heraclio',sha2(concat('heraclio','paso'),256),'Heraclio',FROM_UNIXTIME('1609380121')),
('alberto',sha2(concat('alberto','paso'),256),'Alberto', FROM_UNIXTIME('1609380121')),
('amor',sha2(concat('amor','paso'),256),'Amor', FROM_UNIXTIME('1609380121')),
('antonio',sha2(concat('antonio','paso'),256),'Antonio', FROM_UNIXTIME('1609380121')),
('carmen',sha2(concat('carmen','paso'),256),'Carmen', FROM_UNIXTIME('1609380121')),
('ricardo',sha2(concat('ricardo','paso'),256),'Ricardo', FROM_UNIXTIME('1609380121')),
('david',sha2(concat('david','paso'),256),'David', FROM_UNIXTIME('1609380121')),
('luis',sha2(concat('luis','paso'),256),'Luis', FROM_UNIXTIME('1609380121')),
('otalvaro',sha2(concat('otalvaro','paso'),256),'Alejandro', FROM_UNIXTIME('1609380121')),
('josue',sha2(concat('josue','paso'),256),'Josue', FROM_UNIXTIME('1609380121')),
('manuel',sha2(concat('manuel','paso'),256),'Manuel', FROM_UNIXTIME('1609380121')),
('admin',sha2(concat('admin','paso'),256),'Administrador', FROM_UNIXTIME('1609380121'));