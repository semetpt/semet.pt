require "lib/helpers/current_page_helpers"
require "lib/helpers/facebook_helpers"
require "lib/helpers/open_graph_helpers"

module Helpers
  include CurrentPageHelpers
  include FacebookHelpers
  include OpenGraphHelpers
end
