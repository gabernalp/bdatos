<aside class="main-sidebar sidebar-dark-primary elevation-4" style="min-height: 917px;">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">{{ trans('panel.site_title') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("admin.home") }}">
                        <i class="fas fa-fw fa-tachometer-alt nav-icon">
                        </i>
                        <p>
                            {{ trans('global.dashboard') }}
                        </p>
                    </a>
                </li>
                @can('user_management_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/permissions*") ? "menu-open" : "" }} {{ request()->is("admin/roles*") ? "menu-open" : "" }} {{ request()->is("admin/users*") ? "menu-open" : "" }} {{ request()->is("admin/audit-logs*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-users">

                            </i>
                            <p>
                                {{ trans('cruds.userManagement.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('permission_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-unlock-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.permission.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('role_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-briefcase">

                                        </i>
                                        <p>
                                            {{ trans('cruds.role.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('user_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-user">

                                        </i>
                                        <p>
                                            {{ trans('cruds.user.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('audit_log_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.audit-logs.index") }}" class="nav-link {{ request()->is("admin/audit-logs") || request()->is("admin/audit-logs/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-file-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.auditLog.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('variables_globale_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/departamentos*") ? "menu-open" : "" }} {{ request()->is("admin/municipios*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-cogs">

                            </i>
                            <p>
                                {{ trans('cruds.variablesGlobale.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('departamento_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.departamentos.index") }}" class="nav-link {{ request()->is("admin/departamentos") || request()->is("admin/departamentos/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-map-marked-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.departamento.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('municipio_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.municipios.index") }}" class="nav-link {{ request()->is("admin/municipios") || request()->is("admin/municipios/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-map-pin">

                                        </i>
                                        <p>
                                            {{ trans('cruds.municipio.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('variables_municipio_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/comunas*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-map-marked-alt">

                            </i>
                            <p>
                                {{ trans('cruds.variablesMunicipio.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('comuna_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.comunas.index") }}" class="nav-link {{ request()->is("admin/comunas") || request()->is("admin/comunas/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-map-marker-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.comuna.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('secretaria_general_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/reportes-sgens*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-building">

                            </i>
                            <p>
                                {{ trans('cruds.secretariaGeneral.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('reportes_sgen_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.reportes-sgens.index") }}" class="nav-link {{ request()->is("admin/reportes-sgens") || request()->is("admin/reportes-sgens/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon far fa-list-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.reportesSgen.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('secretaria_gobierno_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/reportes-sgobs*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-university">

                            </i>
                            <p>
                                {{ trans('cruds.secretariaGobierno.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('reportes_sgob_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.reportes-sgobs.index") }}" class="nav-link {{ request()->is("admin/reportes-sgobs") || request()->is("admin/reportes-sgobs/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon far fa-list-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.reportesSgob.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('secretaria_salud_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/reportes-ssals*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-user-md">

                            </i>
                            <p>
                                {{ trans('cruds.secretariaSalud.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('reportes_ssal_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.reportes-ssals.index") }}" class="nav-link {{ request()->is("admin/reportes-ssals") || request()->is("admin/reportes-ssals/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon far fa-list-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.reportesSsal.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('secretaria_planeacion_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/reportes-splns*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-archway">

                            </i>
                            <p>
                                {{ trans('cruds.secretariaPlaneacion.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('reportes_spln_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.reportes-splns.index") }}" class="nav-link {{ request()->is("admin/reportes-splns") || request()->is("admin/reportes-splns/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon far fa-list-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.reportesSpln.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('secretaria_hacienda_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/reportes-shacs*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-hand-holding-usd">

                            </i>
                            <p>
                                {{ trans('cruds.secretariaHacienda.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('reportes_shac_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.reportes-shacs.index") }}" class="nav-link {{ request()->is("admin/reportes-shacs") || request()->is("admin/reportes-shacs/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon far fa-list-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.reportesShac.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('secretaria_desarrollo_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/reportes-sdes*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-chart-line">

                            </i>
                            <p>
                                {{ trans('cruds.secretariaDesarrollo.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('reportes_sde_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.reportes-sdes.index") }}" class="nav-link {{ request()->is("admin/reportes-sdes") || request()->is("admin/reportes-sdes/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon far fa-list-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.reportesSde.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('secretaria_educacion_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/reportes-sedus*") ? "menu-open" : "" }} {{ request()->is("admin/instituciones*") ? "menu-open" : "" }} {{ request()->is("admin/jornadas*") ? "menu-open" : "" }} {{ request()->is("admin/sedes*") ? "menu-open" : "" }} {{ request()->is("admin/sed-repitencia*") ? "menu-open" : "" }} {{ request()->is("admin/sed-coberturas*") ? "menu-open" : "" }} {{ request()->is("admin/sed-desercions*") ? "menu-open" : "" }} {{ request()->is("admin/sed-recursos*") ? "menu-open" : "" }} {{ request()->is("admin/sed-estimulos-gestores*") ? "menu-open" : "" }} {{ request()->is("admin/sed-planta-personals*") ? "menu-open" : "" }} {{ request()->is("admin/sed-participacion-artista*") ? "menu-open" : "" }} {{ request()->is("admin/matricula-municipals*") ? "menu-open" : "" }} {{ request()->is("admin/sed-calificacion-docentes*") ? "menu-open" : "" }} {{ request()->is("admin/sed-transportes*") ? "menu-open" : "" }} {{ request()->is("admin/sed-alimentacions*") ? "menu-open" : "" }} {{ request()->is("admin/sed-clasificacion-sabers*") ? "menu-open" : "" }} {{ request()->is("admin/sed-biblio-usuarios*") ? "menu-open" : "" }} {{ request()->is("admin/sed-artistica-formaciones*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-book-open">

                            </i>
                            <p>
                                {{ trans('cruds.secretariaEducacion.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('reportes_sedu_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.reportes-sedus.index") }}" class="nav-link {{ request()->is("admin/reportes-sedus") || request()->is("admin/reportes-sedus/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon far fa-list-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.reportesSedu.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('institucione_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.instituciones.index") }}" class="nav-link {{ request()->is("admin/instituciones") || request()->is("admin/instituciones/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-building">

                                        </i>
                                        <p>
                                            {{ trans('cruds.institucione.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('jornada_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.jornadas.index") }}" class="nav-link {{ request()->is("admin/jornadas") || request()->is("admin/jornadas/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-clock">

                                        </i>
                                        <p>
                                            {{ trans('cruds.jornada.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('sede_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.sedes.index") }}" class="nav-link {{ request()->is("admin/sedes") || request()->is("admin/sedes/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-hotel">

                                        </i>
                                        <p>
                                            {{ trans('cruds.sede.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('sed_repitencium_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.sed-repitencia.index") }}" class="nav-link {{ request()->is("admin/sed-repitencia") || request()->is("admin/sed-repitencia/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-play-circle">

                                        </i>
                                        <p>
                                            {{ trans('cruds.sedRepitencium.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('sed_cobertura_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.sed-coberturas.index") }}" class="nav-link {{ request()->is("admin/sed-coberturas") || request()->is("admin/sed-coberturas/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-play-circle">

                                        </i>
                                        <p>
                                            {{ trans('cruds.sedCobertura.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('sed_desercion_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.sed-desercions.index") }}" class="nav-link {{ request()->is("admin/sed-desercions") || request()->is("admin/sed-desercions/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-play-circle">

                                        </i>
                                        <p>
                                            {{ trans('cruds.sedDesercion.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('sed_recurso_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.sed-recursos.index") }}" class="nav-link {{ request()->is("admin/sed-recursos") || request()->is("admin/sed-recursos/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-play-circle">

                                        </i>
                                        <p>
                                            {{ trans('cruds.sedRecurso.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('sed_estimulos_gestore_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.sed-estimulos-gestores.index") }}" class="nav-link {{ request()->is("admin/sed-estimulos-gestores") || request()->is("admin/sed-estimulos-gestores/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-play-circle">

                                        </i>
                                        <p>
                                            {{ trans('cruds.sedEstimulosGestore.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('sed_planta_personal_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.sed-planta-personals.index") }}" class="nav-link {{ request()->is("admin/sed-planta-personals") || request()->is("admin/sed-planta-personals/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-play-circle">

                                        </i>
                                        <p>
                                            {{ trans('cruds.sedPlantaPersonal.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('sed_participacion_artistum_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.sed-participacion-artista.index") }}" class="nav-link {{ request()->is("admin/sed-participacion-artista") || request()->is("admin/sed-participacion-artista/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-play-circle">

                                        </i>
                                        <p>
                                            {{ trans('cruds.sedParticipacionArtistum.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('matricula_municipal_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.matricula-municipals.index") }}" class="nav-link {{ request()->is("admin/matricula-municipals") || request()->is("admin/matricula-municipals/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-play-circle">

                                        </i>
                                        <p>
                                            {{ trans('cruds.matriculaMunicipal.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('sed_calificacion_docente_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.sed-calificacion-docentes.index") }}" class="nav-link {{ request()->is("admin/sed-calificacion-docentes") || request()->is("admin/sed-calificacion-docentes/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-play-circle">

                                        </i>
                                        <p>
                                            {{ trans('cruds.sedCalificacionDocente.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('sed_transporte_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.sed-transportes.index") }}" class="nav-link {{ request()->is("admin/sed-transportes") || request()->is("admin/sed-transportes/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-play-circle">

                                        </i>
                                        <p>
                                            {{ trans('cruds.sedTransporte.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('sed_alimentacion_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.sed-alimentacions.index") }}" class="nav-link {{ request()->is("admin/sed-alimentacions") || request()->is("admin/sed-alimentacions/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-play-circle">

                                        </i>
                                        <p>
                                            {{ trans('cruds.sedAlimentacion.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('sed_clasificacion_saber_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.sed-clasificacion-sabers.index") }}" class="nav-link {{ request()->is("admin/sed-clasificacion-sabers") || request()->is("admin/sed-clasificacion-sabers/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-play-circle">

                                        </i>
                                        <p>
                                            {{ trans('cruds.sedClasificacionSaber.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('sed_biblio_usuario_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.sed-biblio-usuarios.index") }}" class="nav-link {{ request()->is("admin/sed-biblio-usuarios") || request()->is("admin/sed-biblio-usuarios/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-play-circle">

                                        </i>
                                        <p>
                                            {{ trans('cruds.sedBiblioUsuario.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('sed_artistica_formacione_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.sed-artistica-formaciones.index") }}" class="nav-link {{ request()->is("admin/sed-artistica-formaciones") || request()->is("admin/sed-artistica-formaciones/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-play-circle">

                                        </i>
                                        <p>
                                            {{ trans('cruds.sedArtisticaFormacione.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('secretaria_infraestructura_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/reportes-sinfs*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-bezier-curve">

                            </i>
                            <p>
                                {{ trans('cruds.secretariaInfraestructura.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('reportes_sinf_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.reportes-sinfs.index") }}" class="nav-link {{ request()->is("admin/reportes-sinfs") || request()->is("admin/reportes-sinfs/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon far fa-list-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.reportesSinf.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('secretaria_movilidad_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/reportes-smovs*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-car">

                            </i>
                            <p>
                                {{ trans('cruds.secretariaMovilidad.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('reportes_smov_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.reportes-smovs.index") }}" class="nav-link {{ request()->is("admin/reportes-smovs") || request()->is("admin/reportes-smovs/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon far fa-list-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.reportesSmov.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('instituto_recreacion_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/reportes-irdps*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-futbol">

                            </i>
                            <p>
                                {{ trans('cruds.institutoRecreacion.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('reportes_irdp_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.reportes-irdps.index") }}" class="nav-link {{ request()->is("admin/reportes-irdps") || request()->is("admin/reportes-irdps/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon far fa-list-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.reportesIrdp.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('ese_municipal_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/reporte-esems*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-briefcase-medical">

                            </i>
                            <p>
                                {{ trans('cruds.eseMunicipal.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('reporte_esem_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.reporte-esems.index") }}" class="nav-link {{ request()->is("admin/reporte-esems") || request()->is("admin/reporte-esems/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon far fa-list-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.reporteEsem.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('oficina_juridica_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/reportes-oajms*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-balance-scale">

                            </i>
                            <p>
                                {{ trans('cruds.oficinaJuridica.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('reportes_oajm_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.reportes-oajms.index") }}" class="nav-link {{ request()->is("admin/reportes-oajms") || request()->is("admin/reportes-oajms/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon far fa-list-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.reportesOajm.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('user_alert_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.user-alerts.index") }}" class="nav-link {{ request()->is("admin/user-alerts") || request()->is("admin/user-alerts/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-bell">

                            </i>
                            <p>
                                {{ trans('cruds.userAlert.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                    @can('profile_password_edit')
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}" href="{{ route('profile.password.edit') }}">
                                <i class="fa-fw fas fa-key nav-icon">
                                </i>
                                <p>
                                    {{ trans('global.change_password') }}
                                </p>
                            </a>
                        </li>
                    @endcan
                @endif
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                        <p>
                            <i class="fas fa-fw fa-sign-out-alt nav-icon">

                            </i>
                            <p>{{ trans('global.logout') }}</p>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>