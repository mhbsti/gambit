create table analista
(
  id        int auto_increment
    primary key,
  analista  varchar(100) null,
  email     varchar(100) null,
  status    varchar(50)  null,
  trello_id varchar(255) null,
  constraint analista_trello_id_uindex
    unique (trello_id)
);

create table atividade
(
  id                int auto_increment
    primary key,
  requisito         varchar(255) null,
  tipo              varchar(100) null,
  sistema           varchar(50)  null,
  descricao         text         null,
  impacto           varchar(100) null,
  area              varchar(50)  null,
  solicitante       varchar(100) null,
  projeto           varchar(100) null,
  status            varchar(50)  null,
  analista_id       int          null,
  ini_especificacao date         null,
  fim_especificacao date         null,
  dev_id            int          null,
  ini_desenv        datetime     null,
  fim_desenv        datetime     null,
  trello_id         varchar(255) null,
  trello_datat      json         null,
  constraint atividade_trello_id_uindex
    unique (trello_id),
  constraint atividade_analista_id_fk
    foreign key (analista_id) references analista (id),
  constraint atividade_dev_id_fk
    foreign key (dev_id) references dev (id)
);

create table dev
(
  id            int auto_increment
    primary key,
  desenvolvedor varchar(100) null,
  email         varchar(100) null,
  trello_id     varchar(100) null,
  status        varchar(50)  null
);

