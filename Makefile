default: help

help:
	@echo 
#	@echo ">> requirements: psql, gcloud, cloud_sql_proxy"
	@echo ">> requirements: psql"
	@echo
	@echo ">> available commands"
#	@echo "  - db-proxy"
	@echo "  - db-connect"
	@echo

# db-proxy:
# 	@gcloud config set project kahlo-310600
# 	@cloud_sql_proxy -instances=kahlo-310600:us-central1:kahlo-cc=tcp:5432

db-connect:
	@psql "postgresql://postgres:dev@10.0.1.3:5432/kahlo-cc"

deploy:
	@git pull
	@docker-compose build --no-cache 
	@docker-compose up -d
