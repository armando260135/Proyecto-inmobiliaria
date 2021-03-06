toc.dat                                                                                             0000600 0004000 0002000 00000023726 14055045102 0014445 0                                                                                                    ustar 00postgres                        postgres                        0000000 0000000                                                                                                                                                                        PGDMP                           y            tarea1    13.2    13.2                0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false                    0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false                    0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false                    1262    16554    tarea1    DATABASE     e   CREATE DATABASE tarea1 WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'Spanish_Colombia.1252';
    DROP DATABASE tarea1;
                postgres    false                     2615    16944    crudinmobiliaria    SCHEMA         CREATE SCHEMA crudinmobiliaria;
    DROP SCHEMA crudinmobiliaria;
                postgres    false         ?            1259    41558    administrador    TABLE       CREATE TABLE crudinmobiliaria.administrador (
    cod_admin character varying(4) NOT NULL,
    "contraseña_admin" character varying(50),
    sexo_administrador character varying(10),
    nickname_admin character varying(40),
    cod_empleado character varying(3)
);
 +   DROP TABLE crudinmobiliaria.administrador;
       crudinmobiliaria         heap    postgres    false    4         ?            1259    57935    contacto    TABLE     ?  CREATE TABLE crudinmobiliaria.contacto (
    cod_contacto integer NOT NULL,
    nombre_realizo_contacto character varying(35),
    correo_contacto character varying(35),
    telefono_contacto character varying(14),
    descripcion_contacto character varying(400),
    CONSTRAINT nn_correo_contacto CHECK ((telefono_contacto IS NOT NULL)),
    CONSTRAINT nn_nombre_realizo_consulta CHECK ((nombre_realizo_contacto IS NOT NULL)),
    CONSTRAINT nn_telefono_contacto CHECK ((descripcion_contacto IS NOT NULL))
);
 &   DROP TABLE crudinmobiliaria.contacto;
       crudinmobiliaria         heap    postgres    false    4         ?            1259    57933    contacto_cod_contacto_seq    SEQUENCE     ?   CREATE SEQUENCE crudinmobiliaria.contacto_cod_contacto_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 :   DROP SEQUENCE crudinmobiliaria.contacto_cod_contacto_seq;
       crudinmobiliaria          postgres    false    233    4                    0    0    contacto_cod_contacto_seq    SEQUENCE OWNED BY     k   ALTER SEQUENCE crudinmobiliaria.contacto_cod_contacto_seq OWNED BY crudinmobiliaria.contacto.cod_contacto;
          crudinmobiliaria          postgres    false    232         ?            1259    25168    empleado    TABLE     ?  CREATE TABLE crudinmobiliaria.empleado (
    cod_empleado character varying(3) NOT NULL,
    nombre1_empleado character varying(60),
    nombre2_empleado character varying(60),
    apellido1_empleado character varying(60),
    apellido2_empleado character varying(60),
    documento_empleado character varying(18),
    rol_empleado character varying(40),
    ciudad_empleado character varying(40),
    telefono_empleado character varying(13),
    correo_empleado character varying(25),
    fecha_inicio_empleado date,
    tipo_documento_empleado character varying(40),
    pais_empleado character varying(40),
    departamento_empleado character varying(40),
    jornada_empleado character varying(40),
    foto_empleado character varying(40),
    horario_inicio_empleado time without time zone,
    horario_finalizacion_empleado time without time zone,
    estado_empleado character varying(12),
    CONSTRAINT nn_apellido1_empleado CHECK ((apellido1_empleado IS NOT NULL)),
    CONSTRAINT nn_fecha_inicio_empleado CHECK ((fecha_inicio_empleado IS NOT NULL)),
    CONSTRAINT nn_nombre1_empleado CHECK ((nombre1_empleado IS NOT NULL)),
    CONSTRAINT nn_rol_empleado CHECK ((rol_empleado IS NOT NULL))
);
 &   DROP TABLE crudinmobiliaria.empleado;
       crudinmobiliaria         heap    postgres    false    4         ?            1259    16959    publicacion    TABLE     ?  CREATE TABLE crudinmobiliaria.publicacion (
    id_publicacion integer NOT NULL,
    nombre character varying(40),
    descripcion character varying(300),
    nombre_propietario character varying(35),
    tipo_inmueble character varying(20),
    ciudad character varying(15),
    zona character varying(35),
    direccion character varying(30),
    precio integer,
    foto character varying(100),
    CONSTRAINT nn_nombre CHECK ((nombre IS NOT NULL))
);
 )   DROP TABLE crudinmobiliaria.publicacion;
       crudinmobiliaria         heap    postgres    false    4         ?            1259    16957    publicacion_id_publicacion_seq    SEQUENCE     ?   CREATE SEQUENCE crudinmobiliaria.publicacion_id_publicacion_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ?   DROP SEQUENCE crudinmobiliaria.publicacion_id_publicacion_seq;
       crudinmobiliaria          postgres    false    229    4                     0    0    publicacion_id_publicacion_seq    SEQUENCE OWNED BY     u   ALTER SEQUENCE crudinmobiliaria.publicacion_id_publicacion_seq OWNED BY crudinmobiliaria.publicacion.id_publicacion;
          crudinmobiliaria          postgres    false    228         ?           2604    57938    contacto cod_contacto    DEFAULT     ?   ALTER TABLE ONLY crudinmobiliaria.contacto ALTER COLUMN cod_contacto SET DEFAULT nextval('crudinmobiliaria.contacto_cod_contacto_seq'::regclass);
 N   ALTER TABLE crudinmobiliaria.contacto ALTER COLUMN cod_contacto DROP DEFAULT;
       crudinmobiliaria          postgres    false    232    233    233         ~           2604    16962    publicacion id_publicacion    DEFAULT     ?   ALTER TABLE ONLY crudinmobiliaria.publicacion ALTER COLUMN id_publicacion SET DEFAULT nextval('crudinmobiliaria.publicacion_id_publicacion_seq'::regclass);
 S   ALTER TABLE crudinmobiliaria.publicacion ALTER COLUMN id_publicacion DROP DEFAULT;
       crudinmobiliaria          postgres    false    229    228    229                   0    41558    administrador 
   TABLE DATA           ?   COPY crudinmobiliaria.administrador (cod_admin, "contraseña_admin", sexo_administrador, nickname_admin, cod_empleado) FROM stdin;
    crudinmobiliaria          postgres    false    231       3094.dat           0    57935    contacto 
   TABLE DATA           ?   COPY crudinmobiliaria.contacto (cod_contacto, nombre_realizo_contacto, correo_contacto, telefono_contacto, descripcion_contacto) FROM stdin;
    crudinmobiliaria          postgres    false    233       3096.dat           0    25168    empleado 
   TABLE DATA           ?  COPY crudinmobiliaria.empleado (cod_empleado, nombre1_empleado, nombre2_empleado, apellido1_empleado, apellido2_empleado, documento_empleado, rol_empleado, ciudad_empleado, telefono_empleado, correo_empleado, fecha_inicio_empleado, tipo_documento_empleado, pais_empleado, departamento_empleado, jornada_empleado, foto_empleado, horario_inicio_empleado, horario_finalizacion_empleado, estado_empleado) FROM stdin;
    crudinmobiliaria          postgres    false    230       3093.dat           0    16959    publicacion 
   TABLE DATA           ?   COPY crudinmobiliaria.publicacion (id_publicacion, nombre, descripcion, nombre_propietario, tipo_inmueble, ciudad, zona, direccion, precio, foto) FROM stdin;
    crudinmobiliaria          postgres    false    229       3092.dat !           0    0    contacto_cod_contacto_seq    SEQUENCE SET     S   SELECT pg_catalog.setval('crudinmobiliaria.contacto_cod_contacto_seq', 157, true);
          crudinmobiliaria          postgres    false    232         "           0    0    publicacion_id_publicacion_seq    SEQUENCE SET     W   SELECT pg_catalog.setval('crudinmobiliaria.publicacion_id_publicacion_seq', 61, true);
          crudinmobiliaria          postgres    false    228         ?           2606    41592    administrador pk_cod_admin 
   CONSTRAINT     i   ALTER TABLE ONLY crudinmobiliaria.administrador
    ADD CONSTRAINT pk_cod_admin PRIMARY KEY (cod_admin);
 N   ALTER TABLE ONLY crudinmobiliaria.administrador DROP CONSTRAINT pk_cod_admin;
       crudinmobiliaria            postgres    false    231         ?           2606    57943    contacto pk_cod_contacto 
   CONSTRAINT     j   ALTER TABLE ONLY crudinmobiliaria.contacto
    ADD CONSTRAINT pk_cod_contacto PRIMARY KEY (cod_contacto);
 L   ALTER TABLE ONLY crudinmobiliaria.contacto DROP CONSTRAINT pk_cod_contacto;
       crudinmobiliaria            postgres    false    233         ?           2606    25176    empleado pk_cod_empleado 
   CONSTRAINT     j   ALTER TABLE ONLY crudinmobiliaria.empleado
    ADD CONSTRAINT pk_cod_empleado PRIMARY KEY (cod_empleado);
 L   ALTER TABLE ONLY crudinmobiliaria.empleado DROP CONSTRAINT pk_cod_empleado;
       crudinmobiliaria            postgres    false    230         ?           2606    16968    publicacion pk_id_publicacion 
   CONSTRAINT     q   ALTER TABLE ONLY crudinmobiliaria.publicacion
    ADD CONSTRAINT pk_id_publicacion PRIMARY KEY (id_publicacion);
 Q   ALTER TABLE ONLY crudinmobiliaria.publicacion DROP CONSTRAINT pk_id_publicacion;
       crudinmobiliaria            postgres    false    229         ?           2606    41571 '   administrador fk_empleado_administrador    FK CONSTRAINT     ?   ALTER TABLE ONLY crudinmobiliaria.administrador
    ADD CONSTRAINT fk_empleado_administrador FOREIGN KEY (cod_empleado) REFERENCES crudinmobiliaria.empleado(cod_empleado) ON UPDATE CASCADE ON DELETE CASCADE;
 [   ALTER TABLE ONLY crudinmobiliaria.administrador DROP CONSTRAINT fk_empleado_administrador;
       crudinmobiliaria          postgres    false    2955    230    231                                                  3094.dat                                                                                            0000600 0004000 0002000 00000000104 14055045102 0014240 0                                                                                                    ustar 00postgres                        postgres                        0000000 0000000                                                                                                                                                                        001	123	male	armando26013	003
028	2088	male	rapidofurioso8	002
\.


                                                                                                                                                                                                                                                                                                                                                                                                                                                            3096.dat                                                                                            0000600 0004000 0002000 00000000267 14055045102 0014254 0                                                                                                    ustar 00postgres                        postgres                        0000000 0000000                                                                                                                                                                        155	armando pineda	arma@gmail.com	3184785474	piden algun contrato para arrendar la casa?
156	armando pineda	arma@gmail.com	3184785474	piden algun contrato para arrendar la casa?
\.


                                                                                                                                                                                                                                                                                                                                         3093.dat                                                                                            0000600 0004000 0002000 00000002113 14055045102 0014241 0                                                                                                    ustar 00postgres                        postgres                        0000000 0000000                                                                                                                                                                        006	fabricio		quintero		1478914789	Director	ocaña	3156758598	fabricio@gmail.com	2021-05-20	Cedula De Ciudadania	colombia	Norte de santander	Diurna	pro_c9006a1cc19d08ed7e88cb0d585d48a8.jpg	00:22:00	19:20:00	Activo
001	Armando 	Jose 	Pineda	Paredes	1004899110	Gerente Administrativo	Ocaña	3184364004	ajpinedap@gmail.com	2021-05-30	Cedula De Ciudadania	Colombia	Norte de santander	Diurna	pro_5ac460fc6dc747296c14051e10bb2a58.jpg	06:00:00	17:00:00	Activo
002	andres	jose	martinez	rodrigues	88281281	Abogado	rio de oro	3156758598	andres@gmail.com	2021-05-20	Cedula De Ciudadania	colombia	cesar	Diurna	pro_f39e9f601d9f530d2130c34e7d7d36e7.jpg	08:00:00	19:00:00	Activo
003	ana	cecilia	paredes	sanchez	37326950	Gerente Inmobiliario	abrego	3022772092	ana26@gmail.com	2021-05-20	Cedula De Ciudadania	colombia	norte de santander 	Diurna	pro_7adcaaa3677721f9b30c972c8aa27c0e.jpg	10:00:00	14:00:00	Activo
004	jesus		rosales	rosado	58954785	Director	aguachica	318542154	jesus@gmail.com	2021-05-20	Cedula De Ciudadania	colombia	cesar	Diurna	pro_c0a94b713e0fcc1939a1ea918e7a209c.jpg	20:09:00	19:11:00	Activo
\.


                                                                                                                                                                                                                                                                                                                                                                                                                                                     3092.dat                                                                                            0000600 0004000 0002000 00000001644 14055045102 0014250 0                                                                                                    ustar 00postgres                        postgres                        0000000 0000000                                                                                                                                                                        56	se arrienda casa 	casa en arriendo cuenta con 2 cuartos y 3 baños.	kelly martines	Apartaestudio	Ocaña	Juan xxlll	calle 2 # 4-12	350000	pro_0fb16404905f5c77718bf96504521fea.jpg
48	Se Arrienda casa 	se arrienda casa cuenta con 4 baños, 2 habitaciones,1 cocina y muchas cosas mas	nairo quintana	Apartaestudio	Ocaña	cristo rey	CALLE 2 12A 04	450000	pro_7adcaaa3677721f9b30c972c8aa27c0e.jpg
49	casa en arriendo	por motivos de viaje, se arrienda casa no se. 	pepito martines	Casa	Ocaña	marabel	carrera 52 # 05-123	300000	pro_e7c020623b519681d638800899ab8904.jpg
50	bonita casa	esta casa es muy elegante, cuenta con 4 habitaciones y 1 parqueadero	ivan duque marquez	Camprestre	Bogota	centro	carrera 44 # 4	650000	pro_d20123477113f33ed62c990b62a0815d.jpg
59	arriendo casa bonita	cuenta con 9 habitaciones	carlos jose criado areniz	Apartamento	Ocaña	simon bolivar	CALLE 2 12A 04	356000	pro_d651fcb1ce0783b6c8461da7d7492e4f.jpg
\.


                                                                                            restore.sql                                                                                         0000600 0004000 0002000 00000023160 14055045102 0015362 0                                                                                                    ustar 00postgres                        postgres                        0000000 0000000                                                                                                                                                                        --
-- NOTE:
--
-- File paths need to be edited. Search for $$PATH$$ and
-- replace it with the path to the directory containing
-- the extracted data files.
--
--
-- PostgreSQL database dump
--

-- Dumped from database version 13.2
-- Dumped by pg_dump version 13.2

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

DROP DATABASE tarea1;
--
-- Name: tarea1; Type: DATABASE; Schema: -; Owner: postgres
--

CREATE DATABASE tarea1 WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'Spanish_Colombia.1252';


ALTER DATABASE tarea1 OWNER TO postgres;

\connect tarea1

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: crudinmobiliaria; Type: SCHEMA; Schema: -; Owner: postgres
--

CREATE SCHEMA crudinmobiliaria;


ALTER SCHEMA crudinmobiliaria OWNER TO postgres;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: administrador; Type: TABLE; Schema: crudinmobiliaria; Owner: postgres
--

CREATE TABLE crudinmobiliaria.administrador (
    cod_admin character varying(4) NOT NULL,
    "contraseña_admin" character varying(50),
    sexo_administrador character varying(10),
    nickname_admin character varying(40),
    cod_empleado character varying(3)
);


ALTER TABLE crudinmobiliaria.administrador OWNER TO postgres;

--
-- Name: contacto; Type: TABLE; Schema: crudinmobiliaria; Owner: postgres
--

CREATE TABLE crudinmobiliaria.contacto (
    cod_contacto integer NOT NULL,
    nombre_realizo_contacto character varying(35),
    correo_contacto character varying(35),
    telefono_contacto character varying(14),
    descripcion_contacto character varying(400),
    CONSTRAINT nn_correo_contacto CHECK ((telefono_contacto IS NOT NULL)),
    CONSTRAINT nn_nombre_realizo_consulta CHECK ((nombre_realizo_contacto IS NOT NULL)),
    CONSTRAINT nn_telefono_contacto CHECK ((descripcion_contacto IS NOT NULL))
);


ALTER TABLE crudinmobiliaria.contacto OWNER TO postgres;

--
-- Name: contacto_cod_contacto_seq; Type: SEQUENCE; Schema: crudinmobiliaria; Owner: postgres
--

CREATE SEQUENCE crudinmobiliaria.contacto_cod_contacto_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE crudinmobiliaria.contacto_cod_contacto_seq OWNER TO postgres;

--
-- Name: contacto_cod_contacto_seq; Type: SEQUENCE OWNED BY; Schema: crudinmobiliaria; Owner: postgres
--

ALTER SEQUENCE crudinmobiliaria.contacto_cod_contacto_seq OWNED BY crudinmobiliaria.contacto.cod_contacto;


--
-- Name: empleado; Type: TABLE; Schema: crudinmobiliaria; Owner: postgres
--

CREATE TABLE crudinmobiliaria.empleado (
    cod_empleado character varying(3) NOT NULL,
    nombre1_empleado character varying(60),
    nombre2_empleado character varying(60),
    apellido1_empleado character varying(60),
    apellido2_empleado character varying(60),
    documento_empleado character varying(18),
    rol_empleado character varying(40),
    ciudad_empleado character varying(40),
    telefono_empleado character varying(13),
    correo_empleado character varying(25),
    fecha_inicio_empleado date,
    tipo_documento_empleado character varying(40),
    pais_empleado character varying(40),
    departamento_empleado character varying(40),
    jornada_empleado character varying(40),
    foto_empleado character varying(40),
    horario_inicio_empleado time without time zone,
    horario_finalizacion_empleado time without time zone,
    estado_empleado character varying(12),
    CONSTRAINT nn_apellido1_empleado CHECK ((apellido1_empleado IS NOT NULL)),
    CONSTRAINT nn_fecha_inicio_empleado CHECK ((fecha_inicio_empleado IS NOT NULL)),
    CONSTRAINT nn_nombre1_empleado CHECK ((nombre1_empleado IS NOT NULL)),
    CONSTRAINT nn_rol_empleado CHECK ((rol_empleado IS NOT NULL))
);


ALTER TABLE crudinmobiliaria.empleado OWNER TO postgres;

--
-- Name: publicacion; Type: TABLE; Schema: crudinmobiliaria; Owner: postgres
--

CREATE TABLE crudinmobiliaria.publicacion (
    id_publicacion integer NOT NULL,
    nombre character varying(40),
    descripcion character varying(300),
    nombre_propietario character varying(35),
    tipo_inmueble character varying(20),
    ciudad character varying(15),
    zona character varying(35),
    direccion character varying(30),
    precio integer,
    foto character varying(100),
    CONSTRAINT nn_nombre CHECK ((nombre IS NOT NULL))
);


ALTER TABLE crudinmobiliaria.publicacion OWNER TO postgres;

--
-- Name: publicacion_id_publicacion_seq; Type: SEQUENCE; Schema: crudinmobiliaria; Owner: postgres
--

CREATE SEQUENCE crudinmobiliaria.publicacion_id_publicacion_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE crudinmobiliaria.publicacion_id_publicacion_seq OWNER TO postgres;

--
-- Name: publicacion_id_publicacion_seq; Type: SEQUENCE OWNED BY; Schema: crudinmobiliaria; Owner: postgres
--

ALTER SEQUENCE crudinmobiliaria.publicacion_id_publicacion_seq OWNED BY crudinmobiliaria.publicacion.id_publicacion;


--
-- Name: contacto cod_contacto; Type: DEFAULT; Schema: crudinmobiliaria; Owner: postgres
--

ALTER TABLE ONLY crudinmobiliaria.contacto ALTER COLUMN cod_contacto SET DEFAULT nextval('crudinmobiliaria.contacto_cod_contacto_seq'::regclass);


--
-- Name: publicacion id_publicacion; Type: DEFAULT; Schema: crudinmobiliaria; Owner: postgres
--

ALTER TABLE ONLY crudinmobiliaria.publicacion ALTER COLUMN id_publicacion SET DEFAULT nextval('crudinmobiliaria.publicacion_id_publicacion_seq'::regclass);


--
-- Data for Name: administrador; Type: TABLE DATA; Schema: crudinmobiliaria; Owner: postgres
--

COPY crudinmobiliaria.administrador (cod_admin, "contraseña_admin", sexo_administrador, nickname_admin, cod_empleado) FROM stdin;
\.
COPY crudinmobiliaria.administrador (cod_admin, "contraseña_admin", sexo_administrador, nickname_admin, cod_empleado) FROM '$$PATH$$/3094.dat';

--
-- Data for Name: contacto; Type: TABLE DATA; Schema: crudinmobiliaria; Owner: postgres
--

COPY crudinmobiliaria.contacto (cod_contacto, nombre_realizo_contacto, correo_contacto, telefono_contacto, descripcion_contacto) FROM stdin;
\.
COPY crudinmobiliaria.contacto (cod_contacto, nombre_realizo_contacto, correo_contacto, telefono_contacto, descripcion_contacto) FROM '$$PATH$$/3096.dat';

--
-- Data for Name: empleado; Type: TABLE DATA; Schema: crudinmobiliaria; Owner: postgres
--

COPY crudinmobiliaria.empleado (cod_empleado, nombre1_empleado, nombre2_empleado, apellido1_empleado, apellido2_empleado, documento_empleado, rol_empleado, ciudad_empleado, telefono_empleado, correo_empleado, fecha_inicio_empleado, tipo_documento_empleado, pais_empleado, departamento_empleado, jornada_empleado, foto_empleado, horario_inicio_empleado, horario_finalizacion_empleado, estado_empleado) FROM stdin;
\.
COPY crudinmobiliaria.empleado (cod_empleado, nombre1_empleado, nombre2_empleado, apellido1_empleado, apellido2_empleado, documento_empleado, rol_empleado, ciudad_empleado, telefono_empleado, correo_empleado, fecha_inicio_empleado, tipo_documento_empleado, pais_empleado, departamento_empleado, jornada_empleado, foto_empleado, horario_inicio_empleado, horario_finalizacion_empleado, estado_empleado) FROM '$$PATH$$/3093.dat';

--
-- Data for Name: publicacion; Type: TABLE DATA; Schema: crudinmobiliaria; Owner: postgres
--

COPY crudinmobiliaria.publicacion (id_publicacion, nombre, descripcion, nombre_propietario, tipo_inmueble, ciudad, zona, direccion, precio, foto) FROM stdin;
\.
COPY crudinmobiliaria.publicacion (id_publicacion, nombre, descripcion, nombre_propietario, tipo_inmueble, ciudad, zona, direccion, precio, foto) FROM '$$PATH$$/3092.dat';

--
-- Name: contacto_cod_contacto_seq; Type: SEQUENCE SET; Schema: crudinmobiliaria; Owner: postgres
--

SELECT pg_catalog.setval('crudinmobiliaria.contacto_cod_contacto_seq', 157, true);


--
-- Name: publicacion_id_publicacion_seq; Type: SEQUENCE SET; Schema: crudinmobiliaria; Owner: postgres
--

SELECT pg_catalog.setval('crudinmobiliaria.publicacion_id_publicacion_seq', 61, true);


--
-- Name: administrador pk_cod_admin; Type: CONSTRAINT; Schema: crudinmobiliaria; Owner: postgres
--

ALTER TABLE ONLY crudinmobiliaria.administrador
    ADD CONSTRAINT pk_cod_admin PRIMARY KEY (cod_admin);


--
-- Name: contacto pk_cod_contacto; Type: CONSTRAINT; Schema: crudinmobiliaria; Owner: postgres
--

ALTER TABLE ONLY crudinmobiliaria.contacto
    ADD CONSTRAINT pk_cod_contacto PRIMARY KEY (cod_contacto);


--
-- Name: empleado pk_cod_empleado; Type: CONSTRAINT; Schema: crudinmobiliaria; Owner: postgres
--

ALTER TABLE ONLY crudinmobiliaria.empleado
    ADD CONSTRAINT pk_cod_empleado PRIMARY KEY (cod_empleado);


--
-- Name: publicacion pk_id_publicacion; Type: CONSTRAINT; Schema: crudinmobiliaria; Owner: postgres
--

ALTER TABLE ONLY crudinmobiliaria.publicacion
    ADD CONSTRAINT pk_id_publicacion PRIMARY KEY (id_publicacion);


--
-- Name: administrador fk_empleado_administrador; Type: FK CONSTRAINT; Schema: crudinmobiliaria; Owner: postgres
--

ALTER TABLE ONLY crudinmobiliaria.administrador
    ADD CONSTRAINT fk_empleado_administrador FOREIGN KEY (cod_empleado) REFERENCES crudinmobiliaria.empleado(cod_empleado) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- PostgreSQL database dump complete
--

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                