FROM mysql:8.0

# Copy the configuration file and change its permissions
COPY ./my.cnf /etc/mysql/conf.d/my.cnf
RUN chmod 644 /etc/mysql/conf.d/my.cnf

# Copy the initialization script
COPY ./init.sql /docker-entrypoint-initdb.d/init.sql

# Create a directory inside the container
RUN mkdir -p /tmp/demo