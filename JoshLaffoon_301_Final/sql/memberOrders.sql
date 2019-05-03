SELECT final_members.name, final_orders.address, final_orders.message, final_orders.productname
FROM final_members
INNER JOIN final_orders ON final_members.name=final_orders.name;