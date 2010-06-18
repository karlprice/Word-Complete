File.open("rb_out_err.csv", 'w') do |ferr|
File.open("rb_out.csv", 'w') do |fout|
File.open("master_new.csv", 'r') do |f|
	f.each do |l|
		if ! /^.*[\t].*[\t].*[\t].*[\t].*[\t].*$/.match(l)
			fout.puts l
		else
			ferr.puts l
		end
	end
end
end
end
