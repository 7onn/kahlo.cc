// data "terraform_remote_state" "dns" {
//   backend = "gcs"
//   config = {
//     bucket  = "kahlo-terraform-state"
//     prefix  = "dns"
//   }
// }

data "terraform_remote_state" "production" {
  backend = "gcs"
  config = {
    bucket = "kahlo-terraform-state"
    prefix = "production"
  }
}
