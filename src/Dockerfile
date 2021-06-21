FROM devbytom/moodle-php-apache:7.3

RUN apt-get update && apt-get install -y locales && rm -rf /var/lib/apt/lists/* && \
  locale-gen "pt_BR.UTF-8"

ENV LANG=pt_BR.UTF-8 \
    LANGUAGE=pt_BR:pt \
    LC_ALL=pt_BR.UTF-8
