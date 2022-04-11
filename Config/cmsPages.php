<?php

return [
  'admin' => [
    "resources" => [
      "permission" => "ibooking.resources.manage",
      "activated" => true,
      "authenticated" => true,
      "path" => "/booking/resources/index",
      "name" => "qbooking.admin.resources",
      "crud" => "qbooking/_crud/resources",
      "page" => "qcrud/_pages/admin/crudPage",
      "layout" => "qsite/_layouts/master.vue",
      "title" => "ibooking.cms.sidebar.adminResources",
      "icon" => "fas fa-chess-knight",
      "subHeader" => [
        "refresh" => true
      ]
    ]
  ],
  'panel' => [
    "userResource" => [
      "permission" => "ibooking.resources.manage",
      "activated" => true,
      "authenticated" => true,
      "path" => "/booking/resource/user",
      "name" => "qbooking.panel.resource.user",
      "page" => "qbooking/_pages/panel/userResource",
      "layout" => "qsite/_layouts/master.vue",
      "title" => "ibooking.cms.sidebar.panelUserResource",
      "icon" => "fas fa-chess-knight",
      "subHeader" => [
        "refresh" => true
      ]
    ]
  ],
  'main' => [
    "categories" => [
      "permission" => "ibooking.categories.manage",
      "activated" => true,
      "authenticated" => true,
      "path" => "/booking/categories/index",
      "name" => "qbooking.main.categories",
      "crud" => "qbooking/_crud/categories",
      "page" => "qcrud/_pages/admin/crudPage",
      "layout" => "qsite/_layouts/master.vue",
      "title" => "ibooking.cms.sidebar.adminCategories",
      "icon" => "fas fa-layer-group",
      "subHeader" => [
        "refresh" => true
      ]
    ],
    "services" => [
      "permission" => "ibooking.services.manage",
      "activated" => true,
      "authenticated" => true,
      "path" => "/booking/services/index",
      "name" => "qbooking.main.services",
      "crud" => "qbooking/_crud/services",
      "page" => "qcrud/_pages/admin/crudPage",
      "layout" => "qsite/_layouts/master.vue",
      "title" => "ibooking.cms.sidebar.adminServices",
      "icon" => "fas fa-handshake",
      "subHeader" => [
        "refresh" => true
      ]
    ],
    "reservations" => [
      "permission" => "ibooking.reservations.manage",
      "activated" => true,
      "authenticated" => true,
      "path" => "/booking/reservations/index",
      "name" => "qbooking.panel.reservations.index",
      "page" => "qbooking/_pages/main/reservations",
      "layout" => "qsite/_layouts/master.vue",
      "title" => "ibooking.cms.sidebar.panelReservations",
      "icon" => "fas fa-tasks",
      "subHeader" => [
        "refresh" => true
      ]
    ],
    "newReservation" => [
      "permission" => "ibooking.reservations.create",
      "activated" => true,
      "authenticated" => true,
      "path" => "/booking/reservations/create",
      "name" => "qbooking.panel.reservations.create",
      "page" => "qbooking/_pages/main/formReservation",
      "layout" => "qsite/_layouts/master.vue",
      "title" => "ibooking.cms.sidebar.panelNewReservation",
      "icon" => "fas fa-tasks",
      "subHeader" => [
        "refresh" => true
      ]
    ],
    "newPublicReservation" => [
      "permission" => null,
      "activated" => true,
      "authenticated" => false,
      "path" => "/booking/reservations/create/public",
      "name" => "qbooking.panel.reservations.create.public",
      "page" => "qbooking/_pages/main/formReservation",
      "layout" => "qsite/_layouts/blankLogo.vue",
      "title" => "ibooking.cms.sidebar.panelNewReservation",
      "icon" => "fas fa-tasks"
    ]
  ]
];