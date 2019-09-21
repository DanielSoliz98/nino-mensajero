--
-- PostgreSQL database dump
--

-- Dumped from database version 9.4.24
-- Dumped by pg_dump version 11.5

-- Started on 2019-09-21 14:12:27

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
-- TOC entry 2104 (class 1262 OID 16485)
-- Name: delfos_db; Type: DATABASE; Schema: -; Owner: -
--

CREATE DATABASE delfos_db  WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'English_United States.1252' LC_CTYPE = 'English_United States.1252';


\connect delfos_db

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

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 187 (class 1259 OID 24807)
-- Name: analisis_carta; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public.analisis_carta (
    carta_id bigint NOT NULL,
    tipo_carta_id smallint NOT NULL
);


--
-- TOC entry 182 (class 1259 OID 24775)
-- Name: boletin; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public.boletin (
    id bigint NOT NULL,
    nombre character varying(50)[] NOT NULL,
    fecha_creacion date NOT NULL,
    fecha_publicacion date
);


--
-- TOC entry 181 (class 1259 OID 24773)
-- Name: boletin_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE public.boletin_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- TOC entry 2106 (class 0 OID 0)
-- Dependencies: 181
-- Name: boletin_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE public.boletin_id_seq OWNED BY public.boletin.id;


--
-- TOC entry 184 (class 1259 OID 24786)
-- Name: carta; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public.carta (
    id bigint NOT NULL,
    contenido text NOT NULL,
    ip character varying(15),
    fecha_envio timestamp without time zone NOT NULL
);


--
-- TOC entry 183 (class 1259 OID 24784)
-- Name: carta_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE public.carta_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- TOC entry 2107 (class 0 OID 0)
-- Dependencies: 183
-- Name: carta_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE public.carta_id_seq OWNED BY public.carta.id;


--
-- TOC entry 179 (class 1259 OID 24719)
-- Name: especialidad; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public.especialidad (
    id integer NOT NULL,
    nombre character varying(20)[] NOT NULL
);


--
-- TOC entry 178 (class 1259 OID 24717)
-- Name: especialidad_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE public.especialidad_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- TOC entry 2108 (class 0 OID 0)
-- Dependencies: 178
-- Name: especialidad_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE public.especialidad_id_seq OWNED BY public.especialidad.id;


--
-- TOC entry 177 (class 1259 OID 24704)
-- Name: especialista; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public.especialista (
    usuario_id bigint NOT NULL,
    profesion character varying(20)[] NOT NULL
);


--
-- TOC entry 180 (class 1259 OID 24728)
-- Name: especialista_especialidad; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public.especialista_especialidad (
    especialista_usuario_id bigint NOT NULL,
    especialidad_id integer NOT NULL
);


--
-- TOC entry 189 (class 1259 OID 24824)
-- Name: informacion_generada; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public.informacion_generada (
    id bigint NOT NULL,
    contenido text NOT NULL,
    fecha_creacion timestamp without time zone NOT NULL,
    carta_id bigint NOT NULL,
    usuario_id bigint NOT NULL,
    boletin_id bigint
);


--
-- TOC entry 188 (class 1259 OID 24822)
-- Name: informacion_generada_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE public.informacion_generada_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- TOC entry 2109 (class 0 OID 0)
-- Dependencies: 188
-- Name: informacion_generada_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE public.informacion_generada_id_seq OWNED BY public.informacion_generada.id;


--
-- TOC entry 176 (class 1259 OID 24690)
-- Name: rol; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public.rol (
    id smallint NOT NULL,
    nombre character varying(20)[] NOT NULL
);


--
-- TOC entry 175 (class 1259 OID 24688)
-- Name: rol_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE public.rol_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- TOC entry 2110 (class 0 OID 0)
-- Dependencies: 175
-- Name: rol_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE public.rol_id_seq OWNED BY public.rol.id;


--
-- TOC entry 186 (class 1259 OID 24798)
-- Name: tipo_carta; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public.tipo_carta (
    id integer NOT NULL,
    nombre character varying(20)[] NOT NULL,
    urgencia smallint NOT NULL
);


--
-- TOC entry 185 (class 1259 OID 24796)
-- Name: tipo_carta_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE public.tipo_carta_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- TOC entry 2111 (class 0 OID 0)
-- Dependencies: 185
-- Name: tipo_carta_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE public.tipo_carta_id_seq OWNED BY public.tipo_carta.id;


--
-- TOC entry 174 (class 1259 OID 24679)
-- Name: usuario; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public.usuario (
    id bigint NOT NULL,
    nombre_completo character varying(50)[] NOT NULL,
    email character varying(50)[] NOT NULL,
    contrasena character varying(25)[] NOT NULL,
    rol_id smallint NOT NULL
);


--
-- TOC entry 173 (class 1259 OID 24677)
-- Name: usuario_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE public.usuario_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- TOC entry 2112 (class 0 OID 0)
-- Dependencies: 173
-- Name: usuario_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE public.usuario_id_seq OWNED BY public.usuario.id;


--
-- TOC entry 1940 (class 2604 OID 24778)
-- Name: boletin id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.boletin ALTER COLUMN id SET DEFAULT nextval('public.boletin_id_seq'::regclass);


--
-- TOC entry 1941 (class 2604 OID 24789)
-- Name: carta id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.carta ALTER COLUMN id SET DEFAULT nextval('public.carta_id_seq'::regclass);


--
-- TOC entry 1939 (class 2604 OID 24722)
-- Name: especialidad id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.especialidad ALTER COLUMN id SET DEFAULT nextval('public.especialidad_id_seq'::regclass);


--
-- TOC entry 1943 (class 2604 OID 24827)
-- Name: informacion_generada id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.informacion_generada ALTER COLUMN id SET DEFAULT nextval('public.informacion_generada_id_seq'::regclass);


--
-- TOC entry 1938 (class 2604 OID 24693)
-- Name: rol id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.rol ALTER COLUMN id SET DEFAULT nextval('public.rol_id_seq'::regclass);


--
-- TOC entry 1942 (class 2604 OID 24801)
-- Name: tipo_carta id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.tipo_carta ALTER COLUMN id SET DEFAULT nextval('public.tipo_carta_id_seq'::regclass);


--
-- TOC entry 1937 (class 2604 OID 24682)
-- Name: usuario id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.usuario ALTER COLUMN id SET DEFAULT nextval('public.usuario_id_seq'::regclass);


--
-- TOC entry 2096 (class 0 OID 24807)
-- Dependencies: 187
-- Data for Name: analisis_carta; Type: TABLE DATA; Schema: public; Owner: -
--

COPY public.analisis_carta (carta_id, tipo_carta_id) FROM stdin;
\.


--
-- TOC entry 2091 (class 0 OID 24775)
-- Dependencies: 182
-- Data for Name: boletin; Type: TABLE DATA; Schema: public; Owner: -
--

COPY public.boletin (id, nombre, fecha_creacion, fecha_publicacion) FROM stdin;
\.


--
-- TOC entry 2093 (class 0 OID 24786)
-- Dependencies: 184
-- Data for Name: carta; Type: TABLE DATA; Schema: public; Owner: -
--

COPY public.carta (id, contenido, ip, fecha_envio) FROM stdin;
\.


--
-- TOC entry 2088 (class 0 OID 24719)
-- Dependencies: 179
-- Data for Name: especialidad; Type: TABLE DATA; Schema: public; Owner: -
--

COPY public.especialidad (id, nombre) FROM stdin;
\.


--
-- TOC entry 2086 (class 0 OID 24704)
-- Dependencies: 177
-- Data for Name: especialista; Type: TABLE DATA; Schema: public; Owner: -
--

COPY public.especialista (usuario_id, profesion) FROM stdin;
\.


--
-- TOC entry 2089 (class 0 OID 24728)
-- Dependencies: 180
-- Data for Name: especialista_especialidad; Type: TABLE DATA; Schema: public; Owner: -
--

COPY public.especialista_especialidad (especialista_usuario_id, especialidad_id) FROM stdin;
\.


--
-- TOC entry 2098 (class 0 OID 24824)
-- Dependencies: 189
-- Data for Name: informacion_generada; Type: TABLE DATA; Schema: public; Owner: -
--

COPY public.informacion_generada (id, contenido, fecha_creacion, carta_id, usuario_id, boletin_id) FROM stdin;
\.


--
-- TOC entry 2085 (class 0 OID 24690)
-- Dependencies: 176
-- Data for Name: rol; Type: TABLE DATA; Schema: public; Owner: -
--

COPY public.rol (id, nombre) FROM stdin;
\.


--
-- TOC entry 2095 (class 0 OID 24798)
-- Dependencies: 186
-- Data for Name: tipo_carta; Type: TABLE DATA; Schema: public; Owner: -
--

COPY public.tipo_carta (id, nombre, urgencia) FROM stdin;
\.


--
-- TOC entry 2083 (class 0 OID 24679)
-- Dependencies: 174
-- Data for Name: usuario; Type: TABLE DATA; Schema: public; Owner: -
--

COPY public.usuario (id, nombre_completo, email, contrasena, rol_id) FROM stdin;
\.


--
-- TOC entry 2113 (class 0 OID 0)
-- Dependencies: 181
-- Name: boletin_id_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('public.boletin_id_seq', 1, false);


--
-- TOC entry 2114 (class 0 OID 0)
-- Dependencies: 183
-- Name: carta_id_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('public.carta_id_seq', 1, false);


--
-- TOC entry 2115 (class 0 OID 0)
-- Dependencies: 178
-- Name: especialidad_id_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('public.especialidad_id_seq', 1, false);


--
-- TOC entry 2116 (class 0 OID 0)
-- Dependencies: 188
-- Name: informacion_generada_id_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('public.informacion_generada_id_seq', 1, false);


--
-- TOC entry 2117 (class 0 OID 0)
-- Dependencies: 175
-- Name: rol_id_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('public.rol_id_seq', 1, false);


--
-- TOC entry 2118 (class 0 OID 0)
-- Dependencies: 185
-- Name: tipo_carta_id_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('public.tipo_carta_id_seq', 1, false);


--
-- TOC entry 2119 (class 0 OID 0)
-- Dependencies: 173
-- Name: usuario_id_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('public.usuario_id_seq', 1, false);


--
-- TOC entry 1961 (class 2606 OID 24811)
-- Name: analisis_carta analisis_carta_pkey; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.analisis_carta
    ADD CONSTRAINT analisis_carta_pkey PRIMARY KEY (carta_id, tipo_carta_id);


--
-- TOC entry 1955 (class 2606 OID 24783)
-- Name: boletin boletin_pkey; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.boletin
    ADD CONSTRAINT boletin_pkey PRIMARY KEY (id);


--
-- TOC entry 1957 (class 2606 OID 24794)
-- Name: carta carta_pkey; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.carta
    ADD CONSTRAINT carta_pkey PRIMARY KEY (id);


--
-- TOC entry 1951 (class 2606 OID 24727)
-- Name: especialidad especialidad_pkey; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.especialidad
    ADD CONSTRAINT especialidad_pkey PRIMARY KEY (id);


--
-- TOC entry 1953 (class 2606 OID 24763)
-- Name: especialista_especialidad especialista_especialidad_pkey; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.especialista_especialidad
    ADD CONSTRAINT especialista_especialidad_pkey PRIMARY KEY (especialista_usuario_id, especialidad_id);


--
-- TOC entry 1949 (class 2606 OID 24744)
-- Name: especialista especialista_pkey; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.especialista
    ADD CONSTRAINT especialista_pkey PRIMARY KEY (usuario_id);


--
-- TOC entry 1963 (class 2606 OID 24832)
-- Name: informacion_generada informacion_generada_pkey; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.informacion_generada
    ADD CONSTRAINT informacion_generada_pkey PRIMARY KEY (id);


--
-- TOC entry 1947 (class 2606 OID 24698)
-- Name: rol rol_pkey; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.rol
    ADD CONSTRAINT rol_pkey PRIMARY KEY (id);


--
-- TOC entry 1959 (class 2606 OID 24806)
-- Name: tipo_carta tipo_carta_pkey; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.tipo_carta
    ADD CONSTRAINT tipo_carta_pkey PRIMARY KEY (id);


--
-- TOC entry 1945 (class 2606 OID 24687)
-- Name: usuario usuario_pkey; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.usuario
    ADD CONSTRAINT usuario_pkey PRIMARY KEY (id);


--
-- TOC entry 1968 (class 2606 OID 24812)
-- Name: analisis_carta analisis_carta_carta_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.analisis_carta
    ADD CONSTRAINT analisis_carta_carta_id_fkey FOREIGN KEY (carta_id) REFERENCES public.carta(id);


--
-- TOC entry 1969 (class 2606 OID 24817)
-- Name: analisis_carta analisis_carta_tipo_carta_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.analisis_carta
    ADD CONSTRAINT analisis_carta_tipo_carta_id_fkey FOREIGN KEY (tipo_carta_id) REFERENCES public.tipo_carta(id);


--
-- TOC entry 1966 (class 2606 OID 24738)
-- Name: especialista_especialidad especialista_especialidad_especialidad_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.especialista_especialidad
    ADD CONSTRAINT especialista_especialidad_especialidad_id_fkey FOREIGN KEY (especialidad_id) REFERENCES public.especialidad(id);


--
-- TOC entry 1967 (class 2606 OID 24764)
-- Name: especialista_especialidad especialista_especialidad_especialista_usuario_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.especialista_especialidad
    ADD CONSTRAINT especialista_especialidad_especialista_usuario_id_fkey FOREIGN KEY (especialista_usuario_id) REFERENCES public.especialista(usuario_id);


--
-- TOC entry 1965 (class 2606 OID 24745)
-- Name: especialista especialista_usuario_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.especialista
    ADD CONSTRAINT especialista_usuario_id_fkey FOREIGN KEY (usuario_id) REFERENCES public.usuario(id);


--
-- TOC entry 1972 (class 2606 OID 24843)
-- Name: informacion_generada informacion_generada_boletin_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.informacion_generada
    ADD CONSTRAINT informacion_generada_boletin_id_fkey FOREIGN KEY (boletin_id) REFERENCES public.boletin(id);


--
-- TOC entry 1970 (class 2606 OID 24833)
-- Name: informacion_generada informacion_generada_carta_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.informacion_generada
    ADD CONSTRAINT informacion_generada_carta_id_fkey FOREIGN KEY (carta_id) REFERENCES public.carta(id);


--
-- TOC entry 1971 (class 2606 OID 24838)
-- Name: informacion_generada informacion_generada_usuario_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.informacion_generada
    ADD CONSTRAINT informacion_generada_usuario_id_fkey FOREIGN KEY (usuario_id) REFERENCES public.usuario(id);


--
-- TOC entry 1964 (class 2606 OID 24699)
-- Name: usuario rol_fk; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.usuario
    ADD CONSTRAINT rol_fk FOREIGN KEY (rol_id) REFERENCES public.rol(id) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- TOC entry 2105 (class 0 OID 0)
-- Dependencies: 6
-- Name: SCHEMA public; Type: ACL; Schema: -; Owner: -
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


-- Completed on 2019-09-21 14:12:27

--
-- PostgreSQL database dump complete
--

