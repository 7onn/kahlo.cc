resource "google_sql_database_instance" "db" {
  name             = "kahlo-cc"
  database_version = "POSTGRES_13"

  settings {
    tier = "db-f1-micro"
    ip_configuration {
      ipv4_enabled    = false
      private_network = data.terraform_remote_state.network.outputs.vpc_id
      require_ssl     = false
    }
  }
}
