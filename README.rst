How to use this bundle
----------------------


Configuration
=============


::

    facebook.config:
        appId:  YOUR_APP_ID
        secret: YOUR_API_SECRET

    security.config:
        providers:

            facebook: 
              id: facebook.auth

        firewalls:

            public:
                pattern:   /.*
                facebook:  true
                anonymous: true
                stateless: true
                security:  true

        access_control:
            - { path: /.*, role: [ROLE_USER, IS_AUTHENTICATED_ANONYMOUSLY] }


Include the login button in your templates
==========================================

Just add the following code in one of your templates:

::

    {% facebook_connect_button %}


You're done!